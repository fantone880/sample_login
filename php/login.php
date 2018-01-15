<?php

	include ('connection.php');

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO login (fullname, username, password) VALUES ('$fullname', '$username', '$password')";
	

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
		if(!$result){
			echo "Data not Insert";
		}
		else{
			echo "Data successfully inserted";
		}
	}
?>