<?php

	$con =  mysqli_connect('localhost', 'root', '', 'centos');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
	

	if(($username == "") && ($password == "")){
		echo "Username and Password must be filled up!";
	}
	else if($username == ""){
		echo "Username must be filled up!";
	}
	else if($password == ""){
		echo "Password must be filled up!";
	}
	
	else{
		$result = mysqli_query($con, $sql);
		echo "Registration Successful";
	}
?>