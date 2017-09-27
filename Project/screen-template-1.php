<html>
<head>
     <link type="text/css" rel="stylesheet" href="css/material-kit.css">
    <link type="text/css" rel="stylesheet" href="css/demo.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/material-kit.css.map">

  
    </head>
  <body style="height:600.4px; width:837px;">
    <?php
      date_default_timezone_set('Asia/Dubai');
      $date=date('Y-m-d H:i:s');
      $con=mysqli_connect("localhost","root","","ekbooking") or die(mysqli_connect_error);
      $sql="select m_name,m_id,s_time,e_time from booking where r_id=1 order by s_time;";
      $m_name=array();
      $m_id=array();
      $s_time=array();
      $e_time=array();
     // echo $date."\n";
      
      //echo (strtotime($date)+300)."\n";
    $date1=strtotime($date)+300;
   // echo date('Y-m-d H:i:s',$date1);
      if($res1=mysqli_query($con,$sql)){
                  while($row=mysqli_fetch_assoc($res1)){
                    $m_name[]=$row['m_name'];
                    $m_id[]=$row['m_id'];
                    $s_time[]=$row['s_time'];
                    $e_time[]=$row['e_time'];
                    
                  }
      }
      else{
        echo mysqli_error($con);
      }
    foreach($s_time as $i=>$stime){
     // echo "    ".$stime." ".$e_time[$i];
      if((strtotime($stime) <= (strtotime($date)+300)) && (strtotime($e_time[$i])>=strtotime(date('Y-m-d H:i:s'))) ){
        $meetingname=$m_name[$i];
        $starttime=$s_time[$i];
        $endtime=$e_time[$i];
        break;
      }
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
            
        <img class="col-4 pull-right" src="media/logo.jpg">
        </div>
            </div>
    <?php header('Refresh: 300;url="screen-template-1.php"') ?>
  </body>
</html>