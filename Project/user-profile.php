<!Doctype html>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Material Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="style/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="style/assets/css/material-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="style/assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        #title {
            margin: 17px 5px 10px 5px;
            font-size: 35px;
            color: black;
        }
        
        #menu {
            margin-left: 470px;
            margin-top: 50px;
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





    <div class="wrapper">
        <?php include('header2.php'); ?>
        <div class="sidebar" data-color="red" data-background="blue" style="position:fixed;">
            <!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
            <div class="sidebar-wrapper" style="margin-top:50%;">
                <ul class="nav">
                   
                    <li>
                        <a href="user.html" >
                            <i class="material-icons">person</i>
                            <p>Edit Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="material-icons">search</i>
                            <p>My Meetings</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="material-icons">library_books</i>
                            <p>Import Address Book</p>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="material-icons">group</i>
                            <p>Create a Group</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>

        <div class="main-panel">
            <div class="content">
                
                        <div class="container" style="margin-top:10%; margin-left:16%;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-profile">
                                        <div class="card-avatar">
                                            <a href="#pablo">
                                        <img class="img" src="../../NEW-BS-master/Project/media/new_logo.png">
                                            </a>
                                        </div>

                                        <div class="content">
                                            <h3 class="category text-gray">Receptionist</h3>
                                            <h2 class="card-title">Varun Donadi</h2>
                                            <span class=" row card-content">
                                        <h4 class="col-xs-6">2014A7PS000U</h4>                                     <h4 class="col-xs-6">varun@donadi.com</h4>                                                                                                                  </span>
                                            <span class=" row card-content">                                         <h4 class="col-xs-6">+971 56 123 4567</h4>                             <h4 class="col-xs-6">+971 04 987 6543</h4>                                                                                                    </span><br>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </body>




<!--   Core JS Files   -->
<script src="style/assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="style/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="style/assets/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="style/assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="style/assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="style/assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="style/assets/js/demo.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });

</script>

</html>
