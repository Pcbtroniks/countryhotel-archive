<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Country Hotel & Suites</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    
  	<!-- Google Fonts call. Font Used Open Sans & Open Sans Condensed -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>    
    
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php"><img src="assets/img/logosmall.png" alt="Country Hotel and Suites"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            	<li class="dropdown">
            		<a href="index.php" class="dropdown-toggle" >Home </a>
                    
            	</li>
            	<li class="dropdown">
            		<a href="ourhotel.php" class="dropdown-toggle" >Our Hotel </a>
                            	</li>
            	<li class="dropdown">
            		<a href="services.php" class="dropdown-toggle" >Services </a>
                    
            	</li>
            	
            	
            	
            	<li class="dropdown">
            		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Rooms <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    	<li><a href="master.php">Master Room</a></li>
                    	<li><a href="double.php">Doule Room</a></li>
                    	<li><a href="single.php">Single Room</a></li>
                    	
	                   
                    </ul>
            	</li>
            	<li class="dropdown">
            		<a href="gallery.php" class="dropdown-toggle" >Photos </a>
                    
            	</li>
            	<li class="dropdown active">
            		<a href="contact.php" class="dropdown-toggle" >Contact </a>
                   
            	</li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class="contactmap hidden-phone"></div><!-- /contactmap -->
    
    <a><img src="assets/img/Mapa.jpg" alt="Post Thumb"></a>
    
    
    
    
    <hr>
    <div class="container">
   	  <div class="span12">
      
      <div class="alert_green">
   		<p align="center" class=""><i class="icon-map-marker"></i>Ave. Circ. Jorge Alvarez del Castillo No 1482 | Col. Chapultepec Country 44620 | Guadalajara Jalisco, Mexico<br> <br> 
   		  <span class="lead2">Phone + 52 (33) 3823.0492 - </span><a href="mailto:reservaciones@countryhotel.com.mx" target="_blank"><span class="lead2">reservaciones@countryhotel.com.mx</span></a>
    	</div><!--/alert green -->
          
       
         <div class="container"><!-- /row --></div>   
      </div><!-- /row -->
      
    </div><!-- /container -->
    
    <div class="container">
    	<div class="row middle">
    	  <div class="span3"></div>
    		<div class="span6">
				<div class="contact-area">
		            <div class="address container">
				        <div class="row">
			            	<div class="span6">
			                	<form action="form.php" method="POST" id="contact">
			                    	<b><span>Name and Lastname</span></b><input type="text" id="nombre" name="nombre"  required>
			                    	<b><span>Email</span></b><input type="text" id="email" name="email"  required>
			                    	<b><span>Message</span></b><div class="textarea-container"><textarea id="mensaje" name="mensaje"  required></textarea></div>
			                    	<input type="submit" id="submit" name="submit" value="Send">
			                    </form>
			                </div><!-- /span6 -->
			            </div><!-- /row -->
		            </div><!-- /address -->
				</div><!--/contact-area -->
    		</div><!-- /span6 --></div><!-- /row -->
    </div><!-- /container -->
    
    
    
  <div id="twitterwrap">
		<img src="assets/img/twitter.png" alt="Country Hotel and Suites">
		<br>
		<br>
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script><!-- Script Needed to load the Tweets -->
		<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/basicoh_.json?callback=twitterCallback2&count=1"></script>
	</div>
	<div id="footerwrap">
	  <p>Ave. Circ. Jorge Alvarez del Castillo No 1482 | Col. Chapultepec Country  44620</p>
	<p>Guadalajara Jalisco, Mexico | Phone + 52 (33) 3823.0492 </p>
	<br>
	<p><a href="mailto:reservaciones@countryhotel.com.mx" TARGET="_blank">reservaciones@countryhotel.com.mx</a></p>
	<br>
	<div class="social_icons"><a href="https://www.facebook.com/CountryHotelGuadalajara" TARGET="_blank"><img src="assets/img/social/white/facebook.png" width="30" height="30" alt="Facebook"></a></div><!-- End of social icons -->

	
	</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  </body>
</html>
