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
	$b=$_POST['type'];
	$query="SELECT * FROM College WHERE statename='$state' AND cityname='$city' AND collegename='$a'";
	$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	if(mysqli_num_rows($result)>0){
		$query="UPDATE College SET type='$b' WHERE statename='$state' AND cityname='$city' AND collegename='$a'";
		$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	}else{
		$query="INSERT INTO College VALUES('$state','$city','$a','$b')";
		$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	}
	if($result){
		echo "Successfully!";
	}else{
		echo "Failed!";
	}
?>