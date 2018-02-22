<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nick's Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="light">Nick's</span> Portfolio
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="navBar">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projects">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="thanksdan.html">Special Thanks</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <!-- P5 -->
    <script src="js/p5.min.js"></script>
    <script src="js/mysketch.js"></script>
    <header class="intro">
        <div class="sketch-holder" id='sketch-holder'>
        <!-- SKETCH HOLDER-->
        </div>
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Portfolio</h1>
                        <p class="intro-text">Showing the great works of a great person <br> Namely Nick I</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Nick</h2>
                <p>I am a college student who has an extreme passion for computer science. I have a thirst
                for knowing more about the subject, and constantly strive to better my understanding of it. I also love
                listening to music and playing games in my free time, and often go out with friends during the
                weekend. </p>
                <p>This portfolio includes some of my more recent projects.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="projects" class="content-section text-center">
		<h2>A few of my GitHub Projects</h2>
		<div id="github-projects"></div>
		<!--<div class="col-lg-8 col-lg-offset-2">
			<h2>Projects</h2>
			<h3>Gladiator - An Arcade Survival</h3>
			<p>Gladiator is a project I made in colaberation with my artistic friend Tristan, without whom, this project
			never would have gotten done. The goal of the game is to fight waves of monsters, surviving and collecting powerups all the while. Here's a gallary of the game, which you can find the source code of on my <a href="http://www.github.com/MrFlyingbananas">GitHub</a>. <p>
			<p><br><br>Gladiator Main Menu</p>
			<img class="img-responsive" src="img/gladiatorMenu.png" alt = "Gladiator Menu">
			<p><br><br>Gladiator Tutorial Screen</p>
			<img class="img-responsive" src="img/gladiatorTutorial.png" alt = "Gladiator Tutorial Screen">
			<p><br><br>Gladiator Arena With Powerup</p>
			<img class="img-responsive" src="img/gladiatorArena.png" alt = "Gladiator Arena">
			<p><br><br>Gladiator Arena</p>
			<img class="img-responsive" src="img/gladiatorArena2.png" alt = "Gladiator Arena">
			<p><br><br>Gladiator Game Over Screen</p>
			<img class="img-responsive" src="img/gladiatorGameOver.png" alt = "Gladiator Game Over">
		</div> -->
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Me</h2>
                <p>Feel free to <a href="mailto:nick.isom.211@gmail.comNick.Isom.211@gmail.com">email</a> me if you'd like, or look around on my <a href="https://github.com/MrFlyingbananas">GitHub</a> for more projects</p>
                </p>
                <ul class="list-inline banner-social-buttons" style="padding-bottom: 300px;">
                    <li>
                        <a href="https://github.com/MrFlyingbananas" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.js"></script>

	<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js" type="text/javascript"></script>
	<script src="js/github.js" type="text/javascript"></script>

	<script type="text/javascript">
		var $jq2 = jQuery.noConflict();
		$jq2(function() {
		    $jq2("#github-projects").loadRepositories("NickIs211");
	    });
	</script>
</body>
</html>
<?php
    $etag = file_get_contents("etag");
    $url = "https://api.github.com/users/nickis211/repos";
    $curl = curl_init($url);
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HEADER  => true,
        CURLOPT_USERAGENT => 'NickIs211 Site'
    ));
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "If-None-Match: " . "\"" . $etag . "\""
    ));
    $res = curl_exec($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if($httpcode !== 304){
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $body = substr($res, $header_size);
        file_put_contents("github.json", $body);
        list($headers, $content) = explode("\r\n\r\n",$res,2);
        foreach (explode("\r\n",$headers) as $hdr){
            if(strpos($hdr, "ETag: ") !== false){
                file_put_contents("etag",rtrim(substr($hdr, 7),"\""));
            }
        }
    }
            
    curl_close($curl);
?>