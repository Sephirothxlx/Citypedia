<?php
	//database
	$host='mpcs53001.cs.uchicago.edu';
	$username='linxuan';	
	$password='1234';
	$database=$username.'DB';
	$con=mysqli_connect($host, $username, $password, $database) or die('Could not connect: ' . mysqli_connect_error());

	$state=$_GET['state'];
	$city=$_GET['city'];
	$query="SELECT * FROM City WHERE statename='$state' AND cityname='$city'";
	$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	if(mysqli_num_rows($result)>=1)
		echo "The city exists.";
	else{
		$query="INSERT INTO City(statename,cityname) VALUES ('$state','$city')";
		$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
		if($result){
			echo "Successfully!";
		}else{
			echo "Failed!";
		}
	}
?>