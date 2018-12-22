<?php
	//database
	$host='mpcs53001.cs.uchicago.edu';
	$username='linxuan';	
	$password='1234';
	$database=$username.'DB';
	$con=mysqli_connect($host, $username, $password, $database) or die('Could not connect: ' . mysqli_connect_error());

	$state=$_POST['state'];
	$city=$_POST['city'];
	$a=$_POST['viewpoint'];
	$b=$_POST['type'];
	$query="SELECT * FROM Viewpoint WHERE statename='$state' AND cityname='$city' AND viewname='$a'";
	$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	if(mysqli_num_rows($result)>=1){
		$query="UPDATE Viewpoint SET type='$b' WHERE statename='$state' AND cityname='$city' AND viewname='$a'";
		$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	}else{
		$query="INSERT INTO Viewpoint VALUES('$state','$city','$a','$b','')";
		$result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
	}
	if($result){
		echo "Successfully!";
	}else{
		echo "Failed!";
	}
?>