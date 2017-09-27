
<?php 
    session_start();
    if(!isset($_SESSION['Login']))
    {
        header('Location: index.php');
    }
    else
    {
       
    
    

    $connect=mysqli_connect("localhost","root","","ekbooking");
    
    $start = mysqli_real_escape_string($connect,$_GET['s_time']);
    $room = mysqli_real_escape_string($connect,$_GET['r_id']);

    $sql = "SELECT m_id FROM booking WHERE s_time='".$start."' AND r_id='".$room."' limit 1;";

        if($result=mysqli_query($connect,$sql)){
            
            while($row=mysqli_fetch_assoc($result))
                {
                    $meeting_id=$row['m_id'];   //conflicted between $meeting_id = $row or $meeting_id=$row['m_id]
                }
                      
        }
mysqli_close($con);
 header('Location:../home.php?m_id='.$meeting_id);   
    }
?>

