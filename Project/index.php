<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Meeting Booking System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!-- Canonical SEO -->
	<link rel="canonical" href="https://www.creative-tim.com/product/material-kit"/>
	
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-kit.css" rel="stylesheet"/>

</head>

<body class="signup-page">
	<nav class="navbar navbar-transparent navbar-absolute">
      <!-- <img id="logo" src="img/logo.jpg">-->
    	<div class="container">
           
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        	
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		
        		<p class="navbar-brand">Meeting Booking System</p>
        		
        	</div>
      </div>
    </nav>	
    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('img/jpeg.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" method="post" action="php/auth.php">
								<div class="header header-primary text-center header-danger">
									<h4>Login</h4>
									
								</div>
								<p class="text-divider">Enter your details</p>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" name="username" class="form-control" placeholder="Username...">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" name="password" placeholder="Password..." class="form-control" />
									</div>
									
									<a class="btn btn-simple btn-danger" href="forgot.php">Forgot Password?</a>
									<a class="btn btn-simple btn-danger" href="register.php">New? Register Here</a>

									<!-- If you want to add a checkbox to this form, uncomment this code

									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Subscribe to newsletter
										</label>
									</div> -->
								</div>
								<div class="footer text-center">
									<button class="btn btn-danger" type="submit">Sign In</button>
								</div>
								<div class="text-center btn-danger">
								<?php 
                                    session_start();
                                    if(isset($_SESSION['Message']))
                                    {
                                        $string= $_SESSION['Message'];
                                        echo $string;
                                        unset($_SESSION['Message']);
                                    }
                                ?>
                                </div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
		        <div class="container">
		            <nav class="pull-left">
		            </nav>
		            <div class="copyright pull-right">
		                &copy; <?php echo date('Y'); ?> made by Triway Technologies LLC
		            </div>
		        </div>
		    </footer>

		</div>

    </div>

    
        
        
</body>
<!--   Core JS Files   -->
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="js/material-kit.js" type="text/javascript"></script>
</html>
