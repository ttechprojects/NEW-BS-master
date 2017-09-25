<!DOCTYPE html>
<html>
  <body>
<?php

    $con=mysqli_connect("localhost","root","","ekbooking");

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    //if(isset($_SESSION['Login']))
    //{
        $meeting_name= $_POST["m_name"];
        $emp_name= $_POST["s_name"];
        $staff_id= $_POST["s_id"];
        $m_date= $_POST["date"];
        $time_s= $_POST["s_time"];
        $time_e= $_POST["e_time"];
        $nog= $_POST["guests"];
        $cont= $_POST["contact"];
        $email= $_POST["email"];
        
        if (isset ($_POST["telephone"])){
            $telephone=1;
        }
            else{
                $telephone=0;
            }

    
        if (isset ($_POST["TV"])){
            $tv=1;
        }
            else{
                $tv=0;
            }

        if (isset ($_POST["projector"])){
            $projector=1;
        }
            else{
                $projector=0;
            }

        if (isset ($_POST["pc"])){
            $pc=1;
        }
            else{
                $pc=0;
            }

        if (isset ($_POST["IP Board"])){
            $ip=1;
        }
            else{
                $ip=0;
            }

        if (isset ($_POST["DVD"])){
            $dvd=1;
        }
            else{
                $dvd=0;
            }

        if (isset ($_POST["Podium Microphone"])){
            $podium=1;
        }
            else{
                $podium=0;
            }
        if (isset ($_POST["Cordless Microphone"])){
            $cordless=1;
        }
            else{
                $cordless=0;
            }
        if (isset ($_POST["Lap Microphone"])){
            $lap=1;
        }
            else{
                $lap=0;
            }
        if (isset ($_POST["Video Conference"])){
            $conference=1;
        }
            else{
                $conference=0;
            }
    
    
    

        $meet_s=$m_date.' '.$time_s;
        $meet_e=$m_date.' '.$time_e;
        
        $ms=date_create($meet_s);
        $ms1=date_format($ms,"Y-m-d H:i:s");
        $me=date_create($meet_e);
        $me1=date_format($me,"Y-m-d H:i:s");

        //To insert the data into booking
        $sql="INSERT INTO `booking`(`m_name`, `s_name`, `s_id`, `s_time`, `e_time`, `date`, `guests`, `contact`, `email`) VALUES ('".$meeting_name."','".$emp_name."','".$staff_id."','".$ms1."','".$me1."','".$m_date."','".$nog."','".$cont."','".$email."');";
        //To get the meeting id of the newly inserted booking
        //execute one of the two sql queries as per ur convinience.
        $sql_get_id="select m_id from booking where r_id is null limit 1;";
        $sql_get_id2="select m_id from booking where m_name like '".$meeting_name."' and s_time like '".$time_s."' limit 1;";

        
        

          if($res=mysqli_query($con,$sql))
            {
                            //At this poin of time a meeting has been assigned into the booking table with out a room being assigned   
            
              if($res1=mysqli_query($con,$sql_get_id)){
                  while($row=mysqli_fetch_assoc($res1)){
                        
                  
                  $m_id=$row['m_id'];
                  //To find a room and assign into the booking table
                  $sql1= "update booking  set r_id = (select r_id from rooms where r_id not in (select r_id from (select * from booking) as b where b.s_time<'".$ms1."' and b.e_time > '".$me1."') and capacity>=".$nog." and telephone>=".$telephone." and tv>=".$tv." and projector>=".$projector." and pc>=".$pc." and ip_board>=".$ip." and dvd>=".$dvd." and podium_microphone>=".$podium." and cordless_microphone>=".$cordless." and lap_microphone>=".$lap." and video_conferencing>=".$conference." order by capacity limit 1) where m_id = ".$m_id.";";
                    //echo $sql1;
                  }
                    if (mysqli_query($con,$sql1))                     //automatic room allotment sql query
                        {
                      
                  //If this query executes a room has been successfully allotted.
                  //Display a popup showing room id and meeting id and time and return to home.php
                      $room_id=NULL;
                      
                      $sql_get_rid="select r_id from booking where m_id=".$m_id." limit 1;";
                      if($res3=mysqli_query($con,$sql_get_rid)){
                        while($row=mysqli_fetch_assoc($res3)){
                          $room_id=$row['r_id'];
                        }
                      }
                      
                      
                      echo "<script type='text/javascript'>
                          alert('Booking Successfully Updated'+'\n\n'+'Meeting Name : $meeting_name'+'\n'+'Meeting ID : $m_id'+'\n'+'Start Time : ".substr($time_s,11,5)."'+'\n'+'Room Number : $room_id');
                      </script>";
                      echo "I have reached here";
              }
              else{
                //If this block is getting executed, that means our script was not able to find an empty room.
                //Delete the booking which was inserted into booking where r_id value=null or by m_id
                //show a popup of failure and return to home.php
                $sql_fail="delete from booking where r_id is null;";
                if(mysqli_query($con,$sql_fail)){
                  echo "<script>
                    alert('Booking unsuccessful. Could not assign a room automatically. Please try again later. '+'\n'+'Probable cause : Rooms are full!');
                  </script>";
                }
              }
              }
            }
            else {
              //Some serious error occured. check
                echo " ".mysqli_error($con);
            }
                    
                   mysqli_close($con);
    header("Location:home.php");
?>











<!--

update booking  set r_id = (select r_id from rooms where r_id not in (select r_id from (select * from booking) as b where b.s_time<'2017-09-13 09:30:00' and b.e_time > '2017-09-13 11:30:00') and capacity>=14 order by capacity limit 1) where m_name like 'Meeting2'




UPDATE booking SET r_id =(SELECT r_id FROM rooms WHERE rooms.r_id NOT IN (SELECT r_id FROM roombook b WHERE b.s_time < '2017-09-13 09:00:00' AND b.e_time > '2017-09-13 10:00:00') AND rooms.capacity >= 18 AND booking.m_name = "V.Important" LIMIT 1 )






update booking  set r_id = (select r_id from rooms where r_id not in (select r_id from (select * from booking) as b where b.s_time<'2017-09-13 09:30:00' and b.e_time > '2017-09-13 11:30:00') and capacity>=14 order by capacity limit 1) where m_name like 'Meeting2'



on submit = action (assignrooms.php)


CREATE TABLE bookroom SELECT * from booking JOIN rooms using (r_id);

SELECT r_id FROM rooms WHERE rooms.r_id NOT IN (SELECT r_id FROM booking b WHERE b.s_time < '2017-09-13 09:00:00' AND b.e_time > '2017-09-13 10:00:00') AND rooms.capacity >= 18 
    
    SELECT r_id FROM rooms WHERE rooms.r_id NOT IN (SELECT r_id FROM booking b WHERE b.s_time < '2017-09-13 09:00:00' AND b.e_time > '2017-09-13 10:00:00') AND rooms.capacity >= 18 LIMIT 1 
  -->
  </body>
  </html>