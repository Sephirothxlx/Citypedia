<?php
	//database
	$host='mpcs53001.cs.uchicago.edu';
	$username='linxuan';	
	$password='1234';
	$database=$username.'DB';
	$con=mysqli_connect($host, $username, $password, $database) or die('Could not connect: ' . mysqli_connect_error());

	$state=$_POST['state'];
	$city=$_POST['city'];
	$a=$_POST['college'];
	$query="SELECT * FROM College WHERE statename='$state' AND cityname='$city' AND collegename='$a'";
	$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	if(mysqli_num_rows($result)>0){
		$query="DELETE FROM College WHERE statename='$state' AND cityname='$city' AND collegename='$a'";
		$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
		if($result){
			echo "Successfully!";
		}else{
			echo "Failed!";
		}
	}else{
		echo 'There is not this college.';
	}
?>