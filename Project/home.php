<!doctype html>
<html>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<head>
  
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Booking System</title>
    
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>  
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
   <!--    For modal forms     -->
    <link href="css/bootstrap.css" rel="stylesheet" /> 
    <link href="css/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
 
	<!-- jQuery -->
    <link rel="stylesheet" href="css/jquery-ui.css">
  
     
	


      <style>
        #title {
            margin: 17px 5px 10px 5px;
            font-size: 35px;
            color: black;
        }
        
        #menu {
            margin-left: 500px;
            margin-top: 30px;
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
        .form-group{
          margin:3px 0 0 0;
        }
        
        
    </style>
    
        <style>
        /*
            All the necessary styling for the table of rooms done here!
            The only styling dont in-line html is to check if the room is warning with many meetings or not.
            All the rest 0of the styling is done here
        */
        a{
            /*display: block;
            height: 100px;
            width: 250px;*/
            color:white;
            text-decoration-line: none;
        }
            #addaroom{
                color:dimgrey;
                padding-left: 20px;
                cursor: pointer;
            }
        b{
            font-size: 15px;
        }
            #table-layout-inline{
                display:table;
                width:100%;
                table-layout:fixed;
                
            }
        td{
            max-width: 300px;
            border-radius: 5px;
            height:auto;
            width:250px; 
            color: white;
            text-align:center;
            cursor: pointer;
        }
        .meeting_time{
            font-size: 11px;
        }
        .occupied_b{
            background-color: red;
        }
        .occupied_a{
            background-color: red;
        }
            #room_table_data{
                padding: 0 10px 0 10px;
            }
            .rooms_table{
                display: block;
                overflow-y: scroll;
                overflow-x: hidden;
                max-height: 500px;
                width:100%;
            }
            .unselectable {
    -moz-user-select: -moz-none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -o-user-select: none;
    user-select: none;
}
          #classTable tbody tr td{
            color: #646464;
          }
       
    
    </style>
        <!-- 
            Note: if u dont have an internet connection, you might want to download these files add them to your woking directory and call them locally.
        -->

        <script>
        $(document).ready(function(){ //Check if the document is loaded or not.
            $(".card-header").click(function(){ //On-click a table cell
                
                var a = $(this).attr('class').split(' '); //get the class of the cell
                if(a[1]=="success"){ //if its success, toggle with occupied success.
                    $(this).toggleClass("success");
                    $(this).toggleClass("occupied_a");
                    $(this).attr("data-background-color","red");
                }
                else if(a[1]=="warning"){ //if its warning toggle with occupied-warning.
                    $(this).toggleClass("warning");
                    $(this).toggleClass("occupied_b");
                    $(this).attr("data-background-color","red");
                }
                else if(a[1]=="occupied_a"){ //if its occupied but availabe before it was occupied, toggle with success
                    $(this).toggleClass("occupied_a");
                    $(this).toggleClass("success");
                    $(this).attr("data-background-color","green");
                }
                else if(a[1]=="occupied_b"){ //if its occupied but warning befor, toggle with warning
                    $(this).toggleClass("occupied_b");
                    $(this).toggleClass("warning");
                    $(this).attr("data-background-color","orange");
                }
               
                
            }); //end click function
          
           
        });//end document and script
    </script>
</head>

<body onload="openViewModal2()">
    
    
    

       <?php include('header2.php'); ?> 
    
    
    
    
    
    
    <div class="wrapper">
         
        
        
            <div class="sidebar" data-color="red" data-background="blue" style="margin:120px 0px 0px 0px;">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			

	    	<div class="sidebar-wrapper" >
				<ul class="nav">
	                <li> 
                        <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">
                        
                            
                            <i class="material-icons unselectable">event</i>
                            Add a meeting
                        </a>
	                </li>
                     <li>
	                    <a data-toggle="modal" href="javascript:void(0)" onclick="openViewModal();">
                            <i class="material-icons unselectable">edit</i>
                            View/Edit a meeting
                        </a>
	                </li>
                    <li>
	                    <a data-toggle="modal" href="javascript:void(0)" onclick="openAddRoom();">
	                        <i class="material-icons unselectable">add box</i>
	                        <p>Add a Room</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.html">
	                        <i class="material-icons unselectable">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	               
	              
	                <li>
	                    <a href="icons.html">
	                        <i class="material-icons unselectable">settings</i>
	                        <p>Settings</p>
	                    </a>
	                </li>
                    
                    
	               
	               
	                
	            </ul>
	    	</div>
		</div>
        
        
        
        
        
        
        
        
        
        <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Add a booking</h4>
          </div>
          <div class="modal-body">  
            <div class="box">
              <div class="content">  
                <div class="form loginBox">
                  <form method="POST" accept-charset="UTF-8" action="php/add_booking.php" id="addabooking">
                    <div class="form-group label-floating">
		              <label class="control-label">Meeting Name</label>
                      <input type="text" class="form-control" name="m_name" required>
                    </div>
                    <div class="form-group label-floating">
		              <label class="control-label">Staff Name</label>
                      <input type="text" class="form-control" name="s_name" required>
                    </div>
                    <div class="form-group label-floating">
		              <label class="control-label">Staff ID</label>
                      <input type="text" class="form-control" name="s_id" required>
                    </div>          
                    <div class="form-group">
		              <label class="control-label">Date</label>
                      <input type="text" class="form-control" id='datetimepicker4' name="date" required>          
                      <script type="text/javascript">
                              //$('.datepicker').datepicker({
                              //weekStart:1
                              //});
                        $(function () {
                          $('#datetimepicker4').datetimepicker({
                            format: 'YYYY-MM-DD'
                          });
                        });
                      </script>   
                    </div>    
                    <div class="form-group">
		              <label class="control-label">Start Time</label>
                      <input type='text' class="form-control" id='datetimepicker1' name="s_time" required />                    
                      <script type="text/javascript">
                        $(function () {
                          $('#datetimepicker1').datetimepicker({
                            format: 'HH:mm:ss'
                          });
                        });
                      </script>                
                    </div>
                    <div class="form-group">
                      <label class="control-label">End Time</label>
                      <input type='text' class="form-control" id='datetimepicker2' name="e_time" required />                 
                      <script type="text/javascript">
                        $(function () {
                          $('#datetimepicker2').datetimepicker({
                            format: 'HH:mm:ss'
                          });
                        });
                      </script>
                    </div>
                    
                    <div class="checkbox">
                      <label>
                          <input type="checkbox" name="options[]" id="option" value="telephone">
                          Telephone
                      </label>
                      <label style="position:fixed; left:50%;">
                          <input type="checkbox" name="options[]" id="option" value="tv">
                          TV
                      </label>
                  </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="options[]" id="option" value="projector">
                          Projector
                      </label>
                      <label style="position:fixed; left:50%;">
                          <input type="checkbox" name="options[]" id="option" value="pc">
                          PC
                      </label>
                  </div><div class="checkbox">
                      <label>
                          <input type="checkbox" name="options[]" id="option" value="ipboard">
                          IP-Board
                      </label>
                      <label style="position:fixed; left:50%;">
                          <input type="checkbox" name="options[]" id="option" value="dvd">
                          DVD
                      </label>
                  </div><div class="checkbox">
                      <label>
                          <input type="checkbox" name="options[]" id="option" value="p-microphone">
                          Podium-Microphone
                      </label>
                      <label style="position:fixed; left:50%;">
                          <input type="checkbox" name="options[]" id="option" value="c-microphone">
                          Cordless-Microphone
                      </label>
                  </div><div class="checkbox">
                      <label>
                          <input type="checkbox" name="options[]" id="option" value="l-microphone">
                          Lap-Microphone
                      </label>
                      <label style="position:fixed; left:50%;">
                          <input type="checkbox" name="options[]" id="option" value="video-conferencing">
                          Video-Conferencing
                      </label>
                  </div>
                    
                    
                    <div class="form-group label-floating">
		              <label class="control-label" id="nogtog">Number of Guests</label>    
                      <input type="number" class="form-control" name="guests" required>
                    </div>
                    <div class="form-group label-floating">
		              <label class="control-label">Contact</label>
                      <input type="number" class="form-control" name="contact" required>
                    </div>
                    <div class="form-group label-floating">
		              <label class="control-label">E-Mail</label>
                      <input id="email" class="form-control" type="text" name="email">
                    </div>
                    <button class="btn btn-default btn-login" value="Add a meeting" >Add a meeting</button>
                  </form>
                </div>
              </div>
            </div>      
          </div>      
        </div>
      </div>
    </div>
        
        
        
        
        
            
    
    
   
        
        
        
        
        
        
        
        
        
         <div class="modal fade view" id="viewModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">View a booking</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="form viewBox" id="testforenter" id="testforenter">
                                    <form  accept-charset="UTF-8" >
                                    <input type="number" class="form-control" placeholder="Meeting ID" name="m_id" id="meetingid" required>
                                    
                                    <input class="btn btn-default btn-login" id="view-button" type="button" value="View a meeting" onclick="getMeeting()">
                                    </form>
                                  <script>
                                      $(function(){
                                        $('#testforenter').keypress(function(event){
                                           if(event.which==13){
                                                $('#view-button').click(); 
                                           } 
                                        });
                                        });
                                        </script>
                                </div>
                             </div>
                        </div>
                        
                    </div>
                      
    		      </div>
		      </div>
		  </div>
        
        
        
        
        
        
        
        
        
        
        <div class="modal fade view" id="viewModal2" >
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">View a booking</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                
                                <div class="division">
                                    <div class="line l"></div>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form viewBox2">
                                    
                                    
                                    
                                    <?php
                                    
                                    //include 'php/disbookmname.php?';
                                
                                
                                $con=mysqli_connect("localhost","root","","ekbooking");

                                if (mysqli_connect_errno())
                                {
                                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                }
                                
                                $mid=$_GET['m_id'];
                
                                $sql = "SELECT s_id, s_name, m_name, guests, s_time, e_time, r_id, contact, email, m_id FROM booking where m_id = '$mid';";

                                if ($result = mysqli_query($con, $sql))
                                {
                                    $resultArray = array();
                                    $tempArray = array();

                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        $tempArray = $row;
                                        array_push($resultArray, $tempArray);

                                        $datetime = date_create($row['s_time']);
                                        $date = date_format($datetime,"Y-m-d");
                                        $s_time = date_format($datetime,"H:i:s");
                                        $datetime = date_create($row['e_time']);
                                        $e_time = date_format($datetime,"H:i:s");
                                     
                                    
                                    
                                    ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <form method="post" action="php/editbooking.php?m_id=<?php echo '' .$row['m_id']; ?>&m_name=<?php echo '' .$row['m_name']; ?>&s_name=<?php echo ''.$row['s_name'];?>&s_id=<?php  echo ''. $row['s_id']; ?>&date=<?php echo '' . substr($row['s_time'],0,10);?>&start=<?php echo '' .$s_time; ?>&end=<?php echo '' .$e_time; ?>&nog=<?php echo '' .$row['guests']; ?>&room=<?php echo '' .$row['r_id']?>&cont=<?php echo '' .$row['contact']; ?>&email=<?php  echo '' .$row['email']; ?>" accept-charset="UTF-8">
                                        <input type="number" class="form-control view" id="mid" placeholder="Meeting ID" name="m_id"  value="<?php echo '' .$row['m_id']; ?>" required readonly>
                                    <input type="text" class="form-control view" placeholder="Meeting Name" id="m_name"  value="<?php echo '' .$row['m_name']; ?>" name="m_name" readonly required>
                                    <input type="text" class="form-control view" placeholder="Staff Name" name="s_name" id="s_name" value="<?php echo ''.$row['s_name'];?>" readonly required>
                                    <input type="text" class="form-control view" placeholder="Staff ID" name="s_id" id="s_id" value="<?php  echo ''. $row['s_id']; ?>" required readonly>
                                    <input type="text" class="form-control view" placeholder="Date" id='edit-date' name="date" value="<?php echo '' . substr($row['s_time'],0,10);?>" required readonly>
                                        
                                           
     
                                        
                                    <input type='text' class="form-control view" readonly placeholder="Start Time" id='edit-stime' value="<?php echo '' .$s_time; ?>" name="s_time" required />
                    
      
                
                                    <input type='text' class="form-control view" placeholder="End Time" id='edit-etime' value="<?php echo '' .$e_time; ?>" name="e_time" required  readonly/>
                    
 
                                        
                                    <input type="number" class="form-control view" placeholder="Number of Guests" id="nog" value="<?php echo '' .$row['guests']; ?>" value="<?php echo '' .$row['guests']?>" readonly name="guests" required>
                                    <input type="number" class="form-control view" placeholder="Room" id="room" value="<?php echo '' .$row['r_id']; ?>" value="<?php echo '' .$row['r_id']?>" name="r_id" required readonly>
                                    <input type="number" class="form-control view" placeholder="Contact" name="contact" id="contact"  value="<?php echo '' .$row['contact']; ?>" required readonly>
                                    <input id="email" class="form-control view" type="text" placeholder="Email" id="email" name="email" value="<?php  echo '' .$row['email']; ?>"  readonly>
                                    <input class="btn btn-default btn-login" id='edit-button' type="button" value="Edit a meeting" onclick="edit()">
                                    </form>
                                       <?php 
                                                                }//for the while loop

                                                             } // for the if condition

                                                         mysqli_close($con); 

                                                    ?>
        
     
                                </div>
                             </div>
                        </div>
                        
                    </div>
                      
    		      </div>
		      </div>
		  </div>
        
        
        
        
                                              
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="modal fade login" id="addRoom">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Add a Room</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                 <div class="form addRoom">
                                
                        <form method="post" action="" accept-charset="UTF-8">
   
                            <input type="text" class="form-control" placeholder="Enter Room ID" name="r_id" id="rid" required>
                                    <input type="text" class="form-control" placeholder=" Enter Room Name" name="r_name" id='rname' required>
                                    <input type="text" class="form-control" placeholder="Enter Room Capacity" name="capacity" id='capacity' required>
                                    <input class="btn btn-default btn-login" type="button" value="Submit" onclick="addRoom()">
                                    </form>
                                 </div>
                                </div>
                             </div>
                        </div>
                        
                    </div>
                      
    		      </div>
		      </div>
		
        
    
      
      
      
      
      
      
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
      <div class="main-panel">
        
               <div class="content">
                 
                <p id="date" style="color:#646464; margin-top:60px; font-size:30px; font-family:helvetica;"> 
                     
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
                     </script>
                 
                 </p>


                  <ul class="nav nav-pills nav-pills-danger" role="tablist" style="margin-top:0px; float:right; margin-right:20px;">
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
                          
                          
    
     <?php //start php code.
    
         $con=mysqli_connect("localhost","root","","ekbooking"); //Connect to the mySQL server.
    if (mysqli_connect_errno()) //Check if its connected or not.
        { 
            echo "Failed to connect to MySQL: " . mysqli_connect_error(); //If unable to connect, display error.
        }
    $get_room_id="select r_id,r_name from rooms order by capacity;"; // SQL query to get room id from the database.
    $room_id=array();
    $room_name=array();             // An array to store all the room numbers.
    $result=mysqli_query($con,$get_room_id); //Execute the query.
    if(mysqli_num_rows($result) > 0){ // check if the query returned any rows, if yes then proceed:
        //echo "Get room number successful!"; //For debugging purposes.
        while($row = mysqli_fetch_assoc($result)){ //if there are more than 1 rows, then an array to read data one by one from the result.
            $room_id[]=$row['r_id'];  // for storing the room ids in the $room_id array.
            $room_name[]=$row['r_name'];
        }
        
        
    }
    
    // uncomment the following lines to check if the room numbers are being called correctly.
    
    /*foreach($room_id as $room_no){
        echo "\n room number : ".$room_no;
    }*/
    $today=date("Y/m/d");
    
    
    $meeting_detail = array(); // for storing all the details of meetings that are going to take place in a room
    
    foreach($room_id as $room_no){
        $get_meetings="select m_name,s_time,e_time,s_name from booking where date='$today' and r_id='$room_no';";
        $room_meeting_detail=array();
        $result=mysqli_query($con,$get_meetings);
        $meeting_detail_array=array();
        if(mysqli_num_rows($result) > 0){ // check if the query returned any rows, if yes then proceed:
            
          //  echo "Get Meetings successfully"; //For debugging purposes.
            while($row = mysqli_fetch_assoc($result)){ //if there are more than 1 rows, then an array to read data one by one from the                                                  //result.
                
                //Storing the required details in an array.
                $room_meeting_detail['m_name']=$row['m_name'];        
                $room_meeting_detail['s_name']=$row['s_name'];        
                $room_meeting_detail['s_time']=$row['s_time'];        
                $room_meeting_detail['e_time']=$row['e_time'];        
                $meeting_detail_array[]=$room_meeting_detail;
            }
        }
        //var_dump($meeting_detail_array);
        $meeting_detail[$room_no]=$meeting_detail_array; //creating a nested array to hold all the meeting deatils according to the room                                                       //numbers in an array.
        //var_dump($room_meeting_detail);
        // clearing and reinitialising the array.
        unset($room_meeting_detail);
        $room_meeting_detail=array();
    }
    //var_dump($meeting_detail); //dumping all the variables to check if the array is proper. For debugging.
    
    //echo sizeof($room_id); //for debugging
    
    
    
    //change the html code here for visuals and stuff
        echo "<div class='container-fluid'>"; //creating a division to hold the table.
        echo "<table class='rooms_table' id='room_table'>"; //creating a table
        $i=0; //row count
        $j=0; //column count
        $col_count=4;//the column size
        $room_count=0;//roomcount
        $more_option=1;//assigns the number of meetings to be displayed on each cell after which the more option appears.
        // Creating the rows and cloumns of the table as per the rooms table in the ekbooking database.
        // to add new rooms dont change anything in this file.
        // just update the rooms table in the database and refresh the page to see the changes.
        while($i<(sizeof($room_id)/$col_count)){ //check for number of rows
            echo "<div class='row' style='margin:10px 0px 0px 0px;'>";
            echo "<tr id='table-layout-inline'>"; //creating a table row
                while($j<$col_count){ //check for number of columns
                    
                    $id=$room_id[$room_count]; //too assign the id of individual room element in the table
                    echo " 
                    <div class='col-lg-3 col-md-6 col-sm-6'>
                    <td id='room_table_data'>
                    <div class='card card-stats'>
                    <div class='card-header success' data-background-color=green id='$id' >
                                    
									<i class='material-icons unselectable' unselectable='on'>group</i>
								</div>
                                
                    
                    <div class='card-content'>
                                    <h2 class='title'><b><a href='home.php?r_id=".$room_id[$room_count]."'>$room_name[$room_count]</a></b></h2>
                                    <p class='category'>Meeting Name</p>
									
								</div>
                            ";//creating the room cell in the table
                                //echo $room_id[$room_count]; //echoing the room number
                                //echo "<br>"; 
                                $x=0; // this variable is for checking if there are meetings more than the threshhold. if so, show a more 
                                      //option and hide the extra part.
                                $md=$meeting_detail[$room_id[$room_count]];//get all the meeting details for the room
                                //var_dump($md);//for debugging
                                echo "	<div class='card-footer'>
									<div class='stats '>";
                                echo "<i class='material-icons text-success unselectable' id='time-icon-".$room_id[$room_count]."'>schedule</i> ";
                    
										
									            
                                foreach($md as $md1){   
                                    //for displaying all the meeting happening in the room.
                                    echo "<a href='php/view-room-footer-booking.php?s_time=".$md1['s_time']."&r_id=".$room_id[$room_count]."'>(".substr($md1['s_time'],11,5)." - ".substr($md1['e_time'],11,5).")&nbsp</a>";
                                    $x++;
                                    if($x>$more_option){
                                        echo "More"; //if meeting are more than 1 display more then stop.
                                        //make the room warning if the number of meetings are more than 3.
                                        echo "<script>
                        
                                           $('#".$room_id[$room_count]."').attr('data-background-color','orange');
                       
                                            $('#".$room_id[$room_count]."').toggleClass('success');//change the class for success here
                                            $('#".$room_id[$room_count]."').toggleClass('warning'); //change the class for warning here
                                            $('#time-icon-".$room_id[$room_count]."').toggleClass('text-success'); //change the class for time icon here
                                            $('#time-icon-".$room_id[$room_count]."').toggleClass('text-danger'); //change the class for time icon here
                                            
                                            </script>";
                                      
                                        break;
                                    }// close if
                                }// close foreach
                    echo "</div>
								</div>
				                        ";
                    echo "
                        
                        </div>
                        </td>
                        </div>";//closing html tags
                    $j++;//increment column
                    if($room_count<sizeof($room_id)-1){
                        $room_count++; //increment the roomcount
                    }
                    else{
                        break; //if roomcount more than number of rooms, break.
                    }
                }//close inner while
            echo "</tr>";//close html tags
            echo "</div>";
            $i++;//increment row.
            $j=0;//rest coumn to 0.
        }//close outer while
        echo "</table>";//close table
        echo "</div>";//close div
                
        
        //end php.
        ?>
                          
                          
                          <div class="modal fade" id="viewRoom" tabindex="-1" role="dialog" aria-labelledby="View Room" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="viewRoomHeading">List Of Meetings</h4>
      </div>
      <div class="modal-body">
        
        
        
        
        
        
        
        
        
<?php
	$r_id = $_GET['r_id'];
	
	
			//$con=mysqli_connect("emibook17.mysql.database.azure.com","bookingsystem17@emibook17","Booking17","ekbooking");
			$con=mysqli_connect("localhost","root","","ekbooking");
			  
			if (mysqli_connect_errno())
			{
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			 
			$sql = "SELECT b.s_time,b.e_time,b.m_name,b.s_name,b.contact,b.m_id FROM booking b WHERE b.r_id = '$r_id' ;";

			 
			if ($result = mysqli_query($con, $sql))
			{
			    
				$resultArray = array();
				$tempArray = array();
			 
				while($row = mysqli_fetch_assoc($result))
				{
					$tempArray = $row;
				    array_push($resultArray, $tempArray);
				}

			}
			

			 
			mysqli_close($con);
            
			
	
?>
        
        
        
        
        
        
        
        
        
        
        
        
          <table id="classTable" class="table table-bordered" style="color:#646464;">
          <thead>
          </thead>
          <tbody>
            <tr >
              <td>Meeting ID</td>
              <td>Meeting Name</td>
              <td>Start Time</td>
              <td>End Time</td>
              <td>Booked by</td>
              <td>Contact Details</td>
              
             </tr>
            <?php 
            
              foreach($resultArray as $res){
                
                echo "<tr id='show-meeting-details-".$res['m_id']."'>"; 
                echo "<td>".$res['m_id']."</td>";
                echo "<td>".$res['m_name']."</td>";
                echo "<td>".$res['s_time']."</td>";
                echo "<td>".$res['e_time']."</td>";
                echo "<td>".$res['s_name']."</td>";
                echo "<td>".$res['contact']."</td>";
                echo "</tr>";
                echo "<script>
            $('#show-meeting-details-".$res['m_id']."').click(function(){
              window.location.href='home.php?m_id=".$res['m_id']."';
          });
            </script>";
              }
            
            ?>
          </tbody>
          </table>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>
        
        
    
    
    
    

         

            
            
            
           </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->

<script src="js/jquery-1.10.2.js" type="text/javascript"></script>  
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/login-register.js" type="text/javascript"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>

<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>

</html>
