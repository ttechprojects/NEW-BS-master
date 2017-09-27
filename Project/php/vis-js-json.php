<?php 
    session_start();
    if(!isset($_SESSION['Login']))
    {
        header('Location: index.php');
    }
    else
    {
       
    
    
    
    $con=mysqli_connect("localhost","root","","ekbooking");

    if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}


    		$sql = "SELECT m_id,r_id,m_name,s_time,e_time FROM booking;";

        if ($result = mysqli_query($con, $sql))
		{
		    
			$resultArray = array();
			$tempArray = array();
		 
			while($row = mysqli_fetch_assoc($result))
			{
					$id = $row['m_id'];
					$group = $row['r_id'];
					$name = $row['m_name'];
                    $start = $row['s_time'];
                    $end = $row['e_time'];
                    
                    $resultArray[]=array('id'=>$id,'group'=>$group,'content'=>$name,'start'=>$start,'end'=>$end);	
			}

		    
		    $fp = fopen('../json/vis.json', 'w');
		    fwrite($fp, json_encode($resultArray));
		    fclose($fp);
            header("Location:../graph.php");
		}



mysqli_close($con);

    }

?>