<?php 
    session_start();
    if(!isset($_SESSION['Login']))
    {
        header('Location: index.php');
    }
    else
    {
       
    
    
	 use SimpleExcel\SimpleExcel;
	 
	   
 
		  require_once '../vendor/autoload.php';
		
		 
		$con=mysqli_connect("localhost","root","","ekbooking");
		  
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		 
		
		$send_date=date('Y-m-d');
		$sql = "SELECT * FROM booking b,rooms r WHERE date >= SUBDATE('".$send_date."',INTERVAL 7 DAY) and b.r_id=r.r_id;";
		 
		if ($result = mysqli_query($con, $sql))
		{
		    
			$resultArray = array();
			$tempArray = array();
		 
			while($row = mysqli_fetch_assoc($result))
			{
				$stime=substr($row['s_time'],11,5);
                $etime=substr($row['e_time'],11,5);
                $row['s_time']=$stime;
                $row['e_time']=$etime;
                $tempArray = $row;
			    array_push($resultArray, $tempArray);
			}

		    
		    $fp = fopen('../json/weekly.json', 'w');
		    fwrite($fp, json_encode($resultArray));
		    fclose($fp);
		}
		
		
		 
		mysqli_close($con);
		
		$excel = new SimpleExcel('JSON');
		$excel->parser->loadFile('../json/weekly.json');                   
		
		
		$excel->convertTo('CSV');
		$date = date('W');
		$string = "Week".$date;
		$excel->writer->saveFile($string);
		header('Location: ../home.php');
		
	}
?>