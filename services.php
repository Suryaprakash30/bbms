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
            <div class="col-lg-12"style="padding-bottom: 20px;padding-top: 15px;padding-left: 50px;">
                <h1 class="page-header text-primary" style="padding-left: 40px;">
                   About Services
                </h1>
            </div>
            	<div class="col-md-4" style="padding-left: 80px;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user-plus"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                    </div>
                </div>
            </div>
			 <div class="col-md-4" style="padding-right: 35px;padding-left: 35px">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i> Need Blood</h4>
                    </div>
                    <div class="panel-body">
                        <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.  </p>
                    </div>
                </div>
            </div>

			  <div class="col-md-4" style="padding-right: 80px;padding-left: 12px;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>Search Donor</h4>
                    </div>
                    <div class="panel-body">
                        <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="padding-left: 80px;">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-flag"></i> Donation Camps</h4>
                    </div>
                    <div class="panel-body" style="padding-bottom: 5px;">
                        <p style="margin-bottom: 0px;">With a huge population of youth, blood donation drives are conducted by hospitals and organisations at college campuses. Donors can also visit blood banks in hospitals to donate blood. Donor should be in the age group of 18 to 65 years.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="padding-right: 35px;padding-left: 35px">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-bullhorn"></i> Announcement</h4>
                    </div>
                    <div class="panel-body">
                        <p style="margin-bottom: 13px;">Blood donation agencies often organize workshops to educate people about the benefits of donating blood. In case of any emergency requirement of blood the admin can post the requirements of the blood type needed.</p>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>