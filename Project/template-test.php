<!DOCTYPE html>
<html style="margin-top:100px;">
    <head>
     <link type="text/css" rel="stylesheet" href="assets/css/material-kit.css">
    <link type="text/css" rel="stylesheet" href="assets/css/demo.css">
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/material-kit.css.map">

  
    </head>
    
    <body>
        
   
        
        <?php
        
        //echo 'Current time: ' . date('Y-m-d H:i:s') . "\n";

$format = 'Y-m-d H:i:s';
//$s_time = DateTime::createFromFormat($format, '1988-08-10');
$now="".date($format);

$con=mysqli_connect("localhost","root","","ekbooking");
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
                                
      $query="select m_id,m_name,r_id,s_time,e_time from booking where date='".date('Y-m-d')."' order by s_time;";
      $s_time=array();
      $mname=array();
      $rid=array();
      $e_time=array();
        
        if($result=mysqli_query($con,$query))        {
  while($row=mysqli_fetch_assoc($result)){
    //echo $row['s_time'];
    //Displays all the meeting times for the day.
  $s_time[]=$row['s_time'];
    $mname[]=$row['m_name'];
    $rid[]=$row['r_id'];
    $e_time[]=$row['e_time'];
  }
}
      
foreach($s_time as $i=>$time)   
  if(strtotime($time)>strtotime($now)  && strtotime($now)>strtotime($e_time[$i])){
    $meetingname=$mname[$i];
    $starttime=$s_time[$i];
    $endtime=$e_time[$i];
    break;
  }


        
        ?>
        <div class="container">
        <div class="row justify-content-center">
        <div class="card card-nav-tabs card-plain col-md-10 col-4" >
        <div class="header header-danger "><h1 class="col-xs-offset-1"><?php echo $meetingname; ?></h1></div><br>
        <h2 class="col-xs-offset-2">Meeting Room Name</h2>
        <h2 class="col-xs-offset-2"><?php echo "".substr($starttime,11,5); ?> - <?php echo "".substr($endtime,11,5); ?></h2>
        </div>
        </div>
            
        
        <div class="row justify-content-end">
            
        <img class="col-4 pull-right" src="img/logo.jpg">
        </div>
            </div>  
    </body>
</html>


