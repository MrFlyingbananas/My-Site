var fireworks = [];
var gravity;


function setup() {
  canvas = createCanvas(displayWidth, displayHeight);
  colorMode(RGB);
  canvas.parent('sketch-holder');
  background(color(51));
  stroke(255);
  strokeWeight(4);
  gravity = createVector(0, .2);
  frameRate(60);
}

function draw(){
  background(51, 51, 51, 30);
  if(random(1) < .11){
    fireworks.push(new Firework());
  }
  for(i = fireworks.length - 1; i >= 0; i--){
    fireworks[i].update();
    fireworks[i].show();
    if(fireworks[i].done()){
      fireworks.splice(i, 1);
    }
  }
}

window.onresize = windowResized;

function windowResized(){
	resizeCanvas(windowWidth, displayHeight);
  background(0);
  stroke(255);
  strokeWeight(4);
  fireworks = [];
}

function Particle(x, y, color, firework){
  this.pos = createVector(x,y);
  this.firework = firework;
  this.lifespan = 255;
  this.color = color;
  if(firework){
    this.vel = createVector(0, random(.3, .9) * -Math.sqrt(gravity.y*2*windowHeight));
  }else{
    this.vel = p5.Vector.random2D();
    this.vel.mult(random(2,8));
  }
  this.acc = createVector(0,0);

  this.done = function(){
    if(this.lifespan <= 0 || this.pos.x > displayHeight || this.pos.x < 0 || this.pos.y > displayHeight){
      return true;
    }else{
      return false;
    }
  }

  this.applyForce = function(force){
    this.acc.add(force);
  }

  this.update = function(){
    this.vel.add(this.acc);
    this.pos.add(this.vel);
    if(!this.firework){
      this.vel.mult(.9);
      this.lifespan-=4;
    }
    this.acc.mult(0);

  }

  this.show = function() {
    if(!this.firework){
      strokeWeight(2);
      stroke(this.color.levels[0], this.color.levels[1], this.color.levels[2], this.lifespan);
    }else{
      strokeWeight(4);
      stroke(this.color.levels[0], this.color.levels[1], this.color.levels[2]);
    }
    point(this.pos.x, this.pos.y);

  }


}

function Firework(){
  this.particles = [];
  this.exploded = false;
  this.hue = color(random(255), random(255), random(255));
  this.firework = new Particle(random(windowWidth), windowHeight, this.hue, true);
  this.update = function(){
    if(!this.exploded){
      this.firework.applyForce(gravity);
      this.firework.update();
      if(this.firework.vel.y >= 0){
        this.exploded = true;
        this.explode();
      }
    }else{
      for(var i = this.particles.length - 1; i >= 0; i--){
        this.particles[i].applyForce(gravity);
        this.particles[i].update();
        if(this.particles[i].done()){
          this.particles.splice(i, 1);
        }
      }
    }
  }
  this.show = function(){
    if(!this.exploded){
      this.firework.show();
    }else{
      for(var i = this.particles.length - 1; i >= 0; i--){
        this.particles[i].show();
      }
    }
  }
  this.explode = function(){
    for(var i = 0; i < 100; i++){
      var p = new Particle(this.firework.pos.x, this.firework.pos.y, this.hue, false);
      this.particles.push(p);
    }
  }
  this.done = function(){
    if(this.exploded && this.particles.length == 0){
      return true;
    }else{
      return false;
    }
  }
}
