<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginbox" >
		<img src="https://i.pinimg.com/originals/0b/50/30/0b5030fa1af3490323a23a71d3b89839.png" class="img">
		<h1>Login</h1>
		<form action="includes/logindb.php" method="POST">
			<p>Username</p>
			<input type="text" name="Name" placeholder="Enter username">
			<p>Password</p>
			<input type="password" name="Password" placeholder="Enter Password">
			<button type="submit" name="submit">LOGIN</button><br>
			<a href="signup.php">Don't have an account?</a><br/>
            <a href="mainpage.php">Back to Home Page</a>
		</form>
	</div>

</body>
</html>