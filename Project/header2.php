<!Doctype html>
<html>

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Material Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project  -->
    <!--<link href="css/demo.css" rel="stylesheet" />-->

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        #title {
            margin: 17px 5px 10px 5px;
            font-size: 35px;
            color: black;
        }
        
       
        
        .atv,
        .str {
            color: #05AE0E;
        }
        
        .tag,
        .pln,
        .kwd {
            color: #3472F7;
        }
        
        .atn {
            color: #2C93FF;
        }
        
        .pln {
            color: #333;
        }
        
        .com {
            color: #999;
        }
        
        .space-top {
            margin-top: 50px;
        }
        
        .area-line {
            border: 1px solid #999;
            border-left: 0;
            border-right: 0;
            color: #666;
            display: block;
            margin-top: 20px;
            padding: 8px 0;
            text-align: center;
        }
        
        .area-line a {
            color: #666;
        }
        
        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>
</head>


 
    <body>
    
    <nav class="navbar navbar-absolute navbar-danger" style="background:black; color:white; display:fixed;">
						<div class="container">
							
                            <div class="navbar-header">
                        <div class="logo-container">
                            <div class="logo" style="margin-left:-190px; margin-top:0px; ">
                                <img src="http://logos-download.com/wp-content/uploads/2016/03/Emirates_Airlines_logotype_emblem_logo_4.png" width="120" height="100" ;>
                            </div>


                        </div>
                    </div>  
                            <div class="navbar-header">
								<!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-danger">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button-->
                                <div class="collapse navbar-collapse" id="navigation-index">
	    	
                                <a class="navbar-brand" style="margin-left:-95px;" href="#"><h3>Emirates Headquaters Booking System</h3></a>
                       
							</div>
                            
                            
                            </div>

							<div class="collapse navbar-collapse" id="example-navbar-danger">
								<ul class="nav navbar-nav navbar-right" style="margin-top:-15px;">
									<li>
		                                <ul class="nav nav-pills " style="color:white; align:center; margin-left: 600px; margin-top: 0px; margin-right:-110px;">
                        <li><a href="home.php" style="color:white;">Home</a></li>
                        <li><a href="fullcalendar.php" style="color:white;">Calendar</a></li>
                                            <li><a href="192.168.1.248:3001" style="color:white;">CMS</a></li>
                        <li><a href="report.php" style="color:white;">Reports</a></li>
                        <li><a href="#pill3"style="color:white;">Log Out</a></li>
                                   </ul> 
                                </ul>
                            </div>
						</div>
					</nav>
    
    
    
     
    </body>



<!--   Core JS Files   -->
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>