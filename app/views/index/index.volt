<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One Page Wonder - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    
	{{ stylesheet_link('css/bootstrap.min.css') }}

    <!-- Custom CSS -->
    
{{ stylesheet_link('css/one-page-wonder.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        
		{{ javascript_include("js/1.js") }}
		       
		{{ javascript_include("js/2.js") }}
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PlayMyList</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
		    <li>
                        <a href="login">Login</a>
                    </li>
		    <li>
                        <a href="register">Register</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header -->
  <header class="header-image">
        <div class="headline">
            <div class="container">
                    <h1>Gather and Share</h1>
                <h2>the Music you Love</h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
		
        <hr class="featurette-divider">

        <!-- First Featurette -->
        <div class="featurette" id="about">
            <img class="featurette-image img-circle img-responsive pull-right" src="img/bg1.png">
            <h2 class="featurette-heading">Dive into the 
                <span class="text-muted">World of Music</span>
            </h2>
            <p class="lead">PlayMyList plays your music,any way you want.You can listen to your favourites and also make a note of them.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Second Featurette -->
        <div class="featurette" id="services">
            <img class="featurette-image img-circle img-responsive pull-left" src="img/bg2.png">
            <h2 class="featurette-heading">Make a Playlist 
                <span class="text-muted">and Listen to whenever You Want.</span>
            </h2>
            <p class="lead">Log into the site and access unlimited music at your footstep.You could also share the playlist among your friends.You can soundtrack your entire life with Playmylist. Whatever you’re doing or feeling, we’ve got the music to make it better.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Third Featurette -->
        <div class="featurette" id="contact">
            <img class="featurette-image img-circle img-responsive pull-right" src="img/bg3.png">
            <h2 class="featurette-heading"> Instant Audio Launch Platform 
                <span class="text-muted">for Bands </span>
            </h2>
            <p class="lead">If you are a music freak and invest your time in music, then playmylist gives you a platform to showcase your talent.</p>
        </div>

        <hr class="featurette-divider">

        <!-- Footer -->
        <div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
      <h2>REGISTER TODAY!</h2>
      
      <hr>
      <h4>
        We love Music. We wish to spread it.
      </h4>
      <p>Be a part of the Music Movement <a href="http://localhost/playmylist/register">JOIN US</a>, at PlayMyList.</p>
      <hr>
      <ul class="list-inline center-block">
        <li><a href="http://facebook.com/"><img src="img/soc_fb.png"></a></li>
        <li><a href="http://twitter.com/"><img src="img/soc_tw.png"></a></li>
        <li><a href="http://google.com/"><img src="img/soc_gplus.png"></a></li>
        <li><a href="http://pinterest.com/"><img src="img/soc_pin.png"></a></li>
      </ul>
      
  	</div><!--/col-->
</div><!--/container-->
  
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted">2015 <a href="http://localhost/PlayMyList">PlayMyList</a></p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"> Scroll To Top<i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


    </div>
    <!-- /.container -->

    <!-- jQuery -->

	{{ javascript_include("js/jquery.js") }}
    <!-- Bootstrap Core JavaScript -->
    
{{ javascript_include("js/bootstrap.min.js") }}



</body>

</html>
