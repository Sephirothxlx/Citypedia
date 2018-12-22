<?php
	//database
	$host='mpcs53001.cs.uchicago.edu';
	$username='linxuan';	
	$password='1234';
	$database=$username.'DB';
	$con=mysqli_connect($host, $username, $password, $database) or die('Could not connect: ' . mysqli_connect_error());

	$state=$_POST['state'];
	$city=$_POST['city'];
	$latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];
	$abstract=$_POST['abstract'];

	$query="UPDATE City SET latitude='$latitude', longitude='$longitude', abstract='$abstract' WHERE statename='$state' AND cityname='$city'";
	$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	if($result){
		echo "Successfully!";
	}else{
		echo "Failed!";
	}
?>