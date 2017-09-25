<!DOCTYPE html>
<html>

<head>
    
    <?php include('header2.php'); ?>
    <meta charset='utf-8' />
    <link href='css/fullcalendar.min.css' rel='stylesheet' /> <!-- loading the css part of the calendar. -->
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' /><!-- css part when the calendar needs to be printed. -->
  
    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    

 
	<link href="css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/font-awesome.css">
  
    <!--    For modal forms     -->

    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />

  

    <script src='js/moment.min.js'></script>
    <script src='js/jquery.min.js'></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/material.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/login-register.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script src='js/fullcalendar.min.js'></script>
      <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
  <!--  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>-->

    <!-- Material Dashboard javascript methods -->
    <script src="js/material-dashboard.js"></script>

  
    <script> // echo the jquery codes for it to work in a php file. 
                   //client side script is not understood by server the side script.

  

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,listWeek'
			},
			defaultDate: new Date(),
			editable: false, // allows resizing and dragging of the events in the interactive calendar.
			navLinks: true, // can click day/week names to navigate views
			eventLimit: true, // allow 'more' link when too many events
			events: {
				url: 'php/get-events.php', //get the events stored in the json file and displays on the interactive calendar.
				error: function() { 
					$('#script-warning').show(); //error if the server is not working.
				}
			},
            loading: function(bool) {
				$('#loading').toggle(bool); //loading of the interactive calendar.
			},
			
			eventClick: function(event,jsEvent,view) {
                if(event.m_id) {
                    //$('#view-meeting').toggle(); //show the display for 'edit a meeting' sidebar.
                    
                    var link = 'home.php?m_id=' + event.m_id; //the link that is to be called again.
                    // delete the above link and use a local variable to pass the variable m_name. easier and quicker solution.
                    window.location.href = link; 
                    // for the edit part, store the link in a variable in jquery and call it in php so there is no need to load a page again!
                    $('#add-meeting').toggle(); //hide the display for the 'add a booking' side-bar

                    return false;
       }
		
		},
                eventColor:'rgba(200,0,0)' //change the color for the events on the calendar!
        });
		
	});

</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet"><!-- styling of the hompage. -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
	<script type="text/javascript">
	 $(document).ready(function(){ // checks if the html page is ready.
         $(".form-submit-booking").click(function(){
            alert("Booking Successful!");
            //(this).load("php/updatebooking.php");
            
         });
         $(".button3").click(function(){
            
         });
         $(".button1").click(function(){
            //$("#edit-delete").toggle();
            //$("#view-meeting").toggle();
              $(".editable").prop("readonly",false);
             $(".edit-submit").toggle();
        });
            
        $("#meeting").click(function(){
            $("#meeting-form").slideToggle();
			$("#cm-form").slideUp();
			$("#ticker-form").slideUp();
        });
        $("#cm").click(function(){
            $("#cm-form").slideToggle();
			$("#meeting-form").slideUp();
			$("#ticker-form").slideUp();
        });
        $("#ticker").click(function(){
            $("#ticker-form").slideToggle();
			$("#meeting-form").slideUp();
			$("#cm-form").slideUp();
        });
		$(".select-all").click(function(){
			if($(".select-all").prop("checked")==true){
				$(".check-box").prop("checked", true);
			}
			else{
				$(".check-box").prop("checked", false);
			}
		});
        
    
    });
	</script>
    <style>
        body {
            background-color: #EEEEEE;
            color: #3C4858;
            overflow: hidden;
            margin-top: -50px;
            padding-left: 0;
            font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
            font-size: 14px;
        }
        
        #script-warning {
            display: none;
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            color: red;
        }
        
        #loading {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
        }
        
        #calendar {
            float: right;
            max-width: 70%;
            
            padding: 0 10px;
            align-content: center;
            align-items: center;
            margin: 50px 170px 10px 0px;
        }
        
        .button1 {
            background-color: rgba(200, 0, 0, 0.8);
            border: none;
            border-radius: 7px;
            color: #f6f6f6;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px 15px 2px;
            cursor: pointer;
            margin-left: 115px;
        }
        
        .button2 {
            background-color: rgba(200, 0, 0, 0.8);
            border: none;
            border-radius: 7px;
            color: #f6f6f6;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

    </style>
</head>


<body style="overflow: scroll;">
  <div class="wrapper">
    <div class="main-panel"><div class="content"><div class="container-fluid">  
      <div class="sidebar" data-color="red" data-background="blue" style="margin:60px 0px 0px 0px; overflow:hidden;">
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
                            View/Edit a meeting.
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
                                
                                <div class="division">
                                    <div class="line l"></div>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" accept-charset="UTF-8" action="add_booking.php" id="addabooking">
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
                                    <div class="form-group label-floating">
		                              <label class="control-label">Date</label>
                                      <input type="text" class="form-control" id='datetimepicker4' name="Date" required>
                                        
                                           
                                        <script type="text/javascript">
                                           // $('.datepicker').datepicker({
                                               //weekStart:1
                                            //});
                                          
                                            $(function () {
                                                $('#datetimepicker4').datetimepicker({
                                                    format: 'DD-MM-YYYY'
                                                });
                                            });
                                        </script>   
                                    </div>    
                                    <div class="form-group label-floating">
		                              <label class="control-label">Start Time</label>
                                      <input type='text' class="form-control" id='datetimepicker1' name="s_time" required />
                    
                                        <script type="text/javascript">
                                            $(function () {
                                                $('#datetimepicker1').datetimepicker({
                                                    format: 'LT'
                                                });
                                            });
                                        </script>
                
                                    </div>
                                    <div class="form-group label-floating">
		                              <label class="control-label">End Time</label>
                                      <input type='text' class="form-control" id='datetimepicker2' name="e_time" required />
                    
                                        <script type="text/javascript">
                                            $(function () {
                                                $('#datetimepicker2').datetimepicker({
                                                    format: 'LT'
                                                });
                                            });
                                        </script>
                                      </div>
                                      <br>
                                      <label style="margin-left:10px;">Room Allotment</label>
                                      <div class="radio">
                                          <label>
                                              <input type="radio" name="optionsRadios" id="automatic" checked="true">
                                              Automatic
                                          </label>
                                          <label>
                                              <input type="radio" id="manual" name="optionsRadios">
                                              Manual
                                          </label>
                                      </div>
                                      
                                      <script>
                                        $('.radio').click(function(){
                                          if($('#automatic').prop('checked')){
                                            $('#nogtog').html("Number of Guests");
                                            $('#addabooking').attr('action','add_booking.php');
                                          }
                                          else if($('#manual').prop('checked')){
                                            $('#nogtog').html("Room Number");
                                            $('#addabooking').attr('action','add_booking_manual.php');
                                          }
                                        });
                                      </script>
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
                                <div class="form viewBox">
                                    <form method="post" action="#" accept-charset="UTF-8">
                                    <input type="number" class="form-control" placeholder="Meeting ID" name="m_id" id="meetingid" required>
                                    <script>
                                        $('#meetingid').keypress(function(event){
                                           if(event.which==13){
                                               $('#view-button').click();
                                           } 
                                        });
                                        </script>
                                    <input class="btn btn-default btn-login" id="view-button" type="button" value="View a meeting" onclick="getMeeting()">
                                    </form>
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
                                    <input class="btn btn-default btn-login" id='view-button' type="button" value="Edit a meeting" onclick="edit()">
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
		
        

  
    <div id='script-warning'>
        <code>../../Meeting_Scheduler/php/get-events.php</code> must be running.
    </div>

    <div id='loading'>loading...</div>

    <div id='calendar'></div>
  </div>
      </div></div> </div>

</body>

</html>
