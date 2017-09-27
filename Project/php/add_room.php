<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION['Login']))
    {
        header('Location: index.php');
    }
    else
    {
       
    
    ?>
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php 

    $r_name=$_GET['r_name'];                                   //Get the name of the room from the passed url 
    $r_id=$_GET['r_id'];                                       //Get the id of the room 
    $capacity=$_GET['capacity'];                               //get the capacity of the room
    $con=mysqli_connect("localhost","root","","ekbooking") or die(mysqli_error());    //Connect to the database
    $sql="insert into rooms values('".$r_name."',".$r_id.",".$capacity.");"; //SQL query to insert into the rooms table.
    //echo $sql;
    //echo $r_name,$r_id,$capacity; //For debugging purposes
    if(mysqli_query($con,$sql)){
        echo "<script>
            alert('Room added successfully');
        </script>";
        
    }
    else{
        echo "Room could not be added. Please try again later.";
    }
    mysqli_close($con);

header("Location:home.php");
?>
<?php } ?>