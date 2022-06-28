<?php 
	session_start();
	$con=mysqli_connect('localhost','root');

	if ($con){
		echo "connection successful";
	}
	else{
		echo "no connection";
	}

	mysqli_select_db($con,'uniquedeveloper');
	$email=$_POST['email'];
	$message=$_POST['message'];

	$q="select * from suggestion ";

	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if ($num==1) {
        $qy="insert into suggestion(email,suggest) values('$email','$message')";
		mysqli_query($con,$qy);
		header('location:index.php');
    }
	else
	{
	
	}
 ?>