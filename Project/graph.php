<!DOCTYPE HTML>
<html>
<head>
      <title>Timeline | External data</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Material Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css" rel="stylesheet" />
    <link href="css/graph-style.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
  <style type="text/css">
    body, html {
      font-family: sans-serif;
    }
  </style>

  <!-- Load jquery for ajax support -->
  <script src="js/jquery.min.js"></script>

  <script src="js/vis.min.js"></script>
  <link href="css/vis-timeline-graph2d.min.css" rel="stylesheet" type="text/css" />
    
  
</head>
<body>
    <div class="wrapper">
        <?php include('header2.php'); ?>
     
             <div class="sidebar" data-color="red" data-background="blue" style="margin:100px 0px 0px 0px;">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
	    	<div class="sidebar-wrapper">
				<ul class="nav">
	               <br>
	                <li>
	                    <a href="user.html">
	                        <i class="material-icons">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	               
	              
	                <li>
	                    <a href="icons.html">
	                        <i class="material-icons">settings</i>
	                        <p>Settings</p>
	                    </a>
	                </li>
                    </ul>
	    	</div>
		</div>
           <div class="main-panel">
            <div class="content">
               <p id="date" style="color:black; margin-top:70px; font-size:30px; font-family:helvetica;"> 
                   <script type="text/javascript">
var m_names = ["January", "February", "March", 
"April", "May", "June", "July", "August", "September", 
"October", "November", "December"];

var d_names = ["Sunday","Monday", "Tuesday", "Wednesday", 
"Thursday", "Friday", "Saturday"];

var myDate = new Date();
myDate.setDate(myDate.getDate());
var curr_date = myDate.getDate();
var curr_month = myDate.getMonth();
var curr_day  = myDate.getDay();
document.write(d_names[curr_day] + ","  + m_names[curr_month] + " " +curr_date);
                   </script></p>   
            <ul class="nav nav-pills nav-pills-danger" role="tablist" style="margin-top:0px; margin-left:850px;">
	<li class="active">
		<a href="home.php" role="tab">
			Grid View
		</a>
	</li>
	<li class="active">
		<a href="graph.php" role="tab">
			Graph View
		</a>
	</li>
	</ul>    

                <br>
           
 
<div id="visualization"></div>
<div id="loading">loading...</div>

<script type="text/javascript">
  // load data via an ajax request. When the data is in, load the timeline
  $.ajax({
    url: 'json/vis.json',
    success: function (data) {
      // hide the "loading..." message
      document.getElementById('loading').style.display = 'none';
        var groups = new vis.DataSet([
    {id: 1231, content: 'Room 1' },
    {id: 1232, content: 'Room 2' },
    {id: 1233, content: 'Room 3' },
    {id: 1234, content: 'Room 4'  }
  ]);
      // DOM element where the Timeline will be attached
      var container = document.getElementById('visualization');
      // Create a DataSet (allows two way data-binding)
      var items = new vis.DataSet(data);
      // Configuration for the Timeline
      var options = {
            groupOrder: function (a, b) {
      return a.value - b.value;
    },
    editable: true,
    //min: (24*60*60),
    //max: Date.getYear.getTime(),
    start: Date.now(),                  //milliseconds from Jan 1 1970 midnight; real time
    end: Date.now()+(24*60*60*1000),    //next day
    zoomMin: 1000 * 60 * 60 ,           //milliseconds unit
    zoomMax: 1000 * 60 * 60 * 24 * 30,  //milliseconds unit
    format: {
      minorLabels: {
        hour: 'h:mm A'
      }
    }
      };
      // Create a Timeline
      var timeline = new vis.Timeline(container);
        timeline.setOptions(options);
        timeline.setGroups(groups);
        timeline.setItems(items);
    },
    error: function (err) {
      console.log('Error', err);
      if (err.status === 0) {
        alert('Failed to load data/basic.json.\nPlease run this example on a server.');
      }
      else {
        alert('Failed to load data/basic.json.');
      }
    }
  });
</script>
            </div>
        </div>
    </div>
</body>
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


<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>
</html>