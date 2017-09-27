<?php 
 use SimpleExcel\SimpleExcel;
    session_start();
    if(!isset($_SESSION['Login']))
    {
        header('Location: index.php');
    }
    else
    {
       
    
  require_once '../vendor/autoload.php';

 
/* session_start();
  if(!isset($_SESSION['Login']))
 {
     header('Location: ../index.php');
 }
 else
 {*/
 
$con=mysqli_connect("localhost","root","","ekbooking");
  
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 

$send_date=date('Y/m/d');
$sql = "SELECT * FROM booking WHERE date = '".$send_date."';";
 
if ($result = mysqli_query($con, $sql))
{
    
	$resultArray = array();
	$tempArray = array();
 
	while($row = mysqli_fetch_assoc($result))
	{
		//$tempArray = $row;
        $stime=substr($row['s_time'],11,5);
        $etime=substr($row['e_time'],11,5);
        $row['s_time']=$stime;
        $row['e_time']=$etime;
        $tempArray = $row;
	    array_push($resultArray, $tempArray);
	}
	//header("Content-type: application/json");
    
    $fp = fopen('../json/daily.json', 'w');
    fwrite($fp, json_encode($resultArray));
    fclose($fp);
}


 
mysqli_close($con);

$excel = new SimpleExcel('JSON');
$excel->parser->loadFile('../json/daily.json');                   


$excel->convertTo('CSV');

$excel->writer->saveFile($send_date);
header('Location: ../home.php');

 }
?>