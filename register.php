<html>
	<head><title>Kings Space</title></head>
	<link rel="stylesheet" type="text/css" href="register.css">
<body>
	<img src="img/logo.png" style="padding-left: 70px;">
	
	

		<div class="register" align="center">

			<h2>Registration</h2><br>
			<form  name="register"  action="registration.php" method="POST" >
				<p> Full Name</p>
					<input type="text" name="name" placeholder="Enter the name" required>
				<p>Address</p>
					<input type="text" name="address" placeholder="Enter address" required>
				<p>E-mail</p>
					<input type="email" name="email" value="" placeholder="Enter email address" required>
					<span id="message"></span>
				<p>Mobile  no</p>
					<input type="text" name="mobile" placeholder="Enter the mobile no" required>
				<p>Password</p>
					<input type="password" name="password" placeholder="Enter password" required>
					<input type="Submit" name="Submit" value="Submit">
					<div class="bck"><a href="new.php">Go Back</a></div>
			</form>						
		</div>
	
</body>
</html>