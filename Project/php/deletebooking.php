<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php

 
$con=mysqli_connect("localhost","root","","ekbooking");
  
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$name=$_GET['m_name'];
 
$sql = "DELETE FROM booking WHERE m_name='$name';";

 
if ($result = mysqli_query($con, $sql))
{
    echo "Booking deleted!";
    header('Location:../index.php'); 

}
 
mysqli_close($con);
?>