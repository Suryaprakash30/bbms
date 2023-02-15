<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBMS</title>

    <link href="data/bootstrap.min.css" rel="stylesheet">

    <link href="data/modern-business.css" rel="stylesheet">

    <link href="data/modern-business.css" rel="stylesheet">

    <link href="data/jquery-ui.css" rel="stylesheet">

    <link href="data/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<nav class="navbar navbar-default 	 navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><i class="fa fa-heartbeat fa-lg"></i> Blood Bank Management System</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="services.php"><i class="fa fa-briefcase"></i> Services</a></li>
                <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact us</a></li>
                <li><a href="userlog/userregistration.php"><i class="fa fa-users"></i> Sign Up</a></li>
                <li><a href="login.php"><i class="fa fa-user-md"></i> Sign In</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary" style="padding-left: 100px;font-size: 4rem;"> Contact Us</h2>
            </div>
            <div class="col-md-6" style="padding-right: 0px;">
                <img class="img-responsive" src="images/contact.jpg" style="padding-left: 100px;">
            </div>
            <div class="col-md-6" style="padding-left: 100px;">
                <h3 class='text-primary'>Contact Details</h3>
                <p>
                    Blood Bank Management System,<br>
					No.10, PCS Street,<br>
					Chennai-600 077.<br>
					Tamil Nadu, India.
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone"></abbr>: 9876543219</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email"></abbr>: <a href="#" >bloodbank@bbms.in</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours"></abbr>: 24*7</p>
				<p><i class="fa fa-globe"></i> 
                    <abbr title="Website"></abbr>: <a href="index.php">www.bbms.com</a></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/login"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/explore"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/"><i class="fa fa-youtube-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
            
        </div>
    
</body>
</html>