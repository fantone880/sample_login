
<!DOCTYPE html>
<html>
<head>
	<title>Welcome User</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="container-page">
		<div class="header">
			<h2>Welcome to my first Web Host</h2>
			<h3>Powered by: CentOS 6.8</h3>
			<h4>Created by: Mark P. Fantone</h4>
		</div>
		<br />
		<div class="login-border">
			<form method="post" action="php/login.php">
				<div class="form-group">
					Fullname: <input type="text" placeholder="input fullname" name="fullname" class="input">
				</div>
				<div class="form-group">
					Username: <input type="text" placeholder="input username" name="username" class="input">
				</div>
				<div class="form-group">
					Password: <input type="password" placeholder="input password" name="password" class="input">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Register">
				</div>
			<form>
		</div>
		<br />
		<h3>List of Registered</h3>
		<div class="table-group">
			<center><table>
				<tr>
					<th>Fullname</th>
					<th>Username</th>
				</tr>
					<?php
						include('php/connection.php');

						$sql = "SELECT * FROM login";
						$result = mysqli_query($con, $sql);
						while($data = $result->fetch_assoc()){
							echo "<tr><td>".$data['fullname']."</td><td>".$data['username']."</td></tr>";
						}
					?>
			</table></center>
		</div>
	</div>
</body>

</html>