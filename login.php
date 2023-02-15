<?php session_start(); ?>
<?php include('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBMS - Login Panel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/metismenu/dist/metisMenu.min.css">

    <link href="css/startmin.css" rel="stylesheet">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image: url('images/blood.jpeg');">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-tint"></span> Blood Bank Management System</a>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <form action="#" method="post">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <center><span class="glyphicon glyphicon-user" style="color:#00A10F;"></span> Login Page</center>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="user" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="pass" type="password" id="myInput" required>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" onclick="myFunction()">Show Password
                                        </label>
                                    </div>
                                    <input type="submit" class="btn btn-info btn-block" style="border-radius:0%;" title="Log In" name="login" value="Login"></input>
                                </fieldset>
                                <div style="padding-top: 10px; font-size: 13px;">
                                  <center><a href="userlog/userregistration.php">New User Registration</a></center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php
  				if (isset($_POST['login']))
  					{
  						$username = mysqli_real_escape_string($con, $_POST['user']);
  						$password = mysqli_real_escape_string($con, $_POST['pass']);

  						$query 		= mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
  						$row		= mysqli_fetch_array($query);
  						$num_row 	= mysqli_num_rows($query);

  						if ($num_row > 0)
  							{
  								$_SESSION['user_id']=$row['user_id'];
  								header('location:pages/index.php');
  							}
  						else
  							{
  								echo '
                  <div class="row">
                    <div class="col-md-4 col-md-offset-4">
  								    <div class="alert alert-danger alert-dismissible">
                        Username & Password did not match! Try Again.
                      </div>
                    </div>
                  </div> ';
  							}
  					}
            if (isset($_POST['login']))
    					{
    						$username = mysqli_real_escape_string($con, $_POST['user']);
    						$password = mysqli_real_escape_string($con, $_POST['pass']);

    						$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
    						$row		= mysqli_fetch_array($query);
    						$num_row 	= mysqli_num_rows($query);

    						if ($num_row > 0)
    							{
    								$_SESSION['user_id']=$row['user_id'];
    								header('location:userlog/userdashboard.php');
    							}
    						else
    							{
    								echo '
                    <div class="row">
                      <div class="col-md-4 col-md-offset-4">
    								    <div class="alert alert-danger alert-dismissible">
                          Username & Password did not match! Try Again.
                        </div>
                      </div>
                    </div> ';
    							}
    					}
  			  ?>
        </div>

    <script>
        function myFunction()
        {
          var x = document.getElementById("myInput");
          if (x.type === "password")
          {
            x.type = "text";
          }
          else
          {
            x.type = "password";
          }
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.5.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.6/metisMenu.min.js">

    <script src="js/startmin.js"></script>
</body>

</html>
