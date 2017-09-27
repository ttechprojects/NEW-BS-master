<?php
	//Create connection
	$con=mysqli_connect("localhost","root","","ekbooking");
	
	//Fetch variables from the URL
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//Check connection
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql = "SELECT username,password FROM user_profile;";
    
	if ($result = mysqli_query($con, $sql))
		{
			while($row = mysqli_fetch_assoc($result))
				{ 
                    
	    			if($row['password']==$password && $row['username']==$username)
	    				{
                            session_start();
                            $_SESSION['Login']=$username;
	    					header("Location: ../home.php");
	    				}
                    else
                    	{
                        session_start();
						$_SESSION['Message']="Login Unsuccessful";
                        header("Location: ../index.php");
                         
                    	}
	    		}
            mysqli_free_result($result);
		}
    else
    {
        echo "Username invalid. Please enter a valid username";
    }
	
	mysqli_close($con);
?>