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

    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/c1.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/c2.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/c3.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <div class="container">
        

      <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Blood Donor Camps</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p6.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p4.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p2.jpg" alt="">
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Why we need you to give blood ?</h2>
            </div>
            <div class="col-md-6">


			<ul>
				<li>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>

				<li>Many people would not be alive today if donors had not generously given their blood.</li>

				<li>We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for people to give blood.</li>

				<li>Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>

				<li>Most people between the ages of 17-65 are able to give blood.</li>

				<li>Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood, so we can make sure we have enough blood in the future.</li>

			</ul>
    </div>
    <div class="col-md-6">
                <img class="img-responsive" src="images/b.jpg" alt="">
            </div>

    <script src="data/jquery.js"></script>

    <script src="data/bootstrap.min.js"></script>

    <script>
    $('.carousel').carousel({
        interval: 5000
    })

	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

</body>
</html>
