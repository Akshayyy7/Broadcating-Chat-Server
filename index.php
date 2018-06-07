<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<style>
	body{

	background-color : #4682B4;


}

.hi {

	
	padding : 20px;
	background-color : #e0ffff;
	margin-top: 50px;
    
}

input[type=text]{
	width:250px;

	
	
}
</style>
</head>
<body>
<div class="hi" >
	
		<h2> Login here </h2>
		<form action="login.php" method="post">
			<label><b>Username</b></label>
			<input type="text" name="uname" placeholder="Username"><br><br>
			<label><b>Password</b></label>
			<input type="text" name="pass" placeholder="Password"><br><br>
			<button style="background-color: #6495ed; color: white;" type="submit">
				<b>Login</b>
			</button>

			

		</form>
		<form action="signup.php" method="post">
			<h2>Dont have an account?? then create a new account</h2>
			<label>Username:</label>
			<input type="text" name="uname" placeholder="Username"><br><br>
			<label>Email address:</label>
			<input type="text" name="Email" placeholder="Email"><br><br>
			<label>Password:</label>
			<input type="text" name="Password" placeholder="Password"><br><br>
			<button style="background-color: #6495ed; color: white;" type="submit">
				<b>Signup</b>
			</button>

		</form>

		<form action="report.php" method="post">
			<h2>Report Option</h2>
			<label>Username:</label>
			<input type="text" name="uname" placeholder="Username"><br><br>
			
			<button style="background-color: #6495ed; color: white;" type="submit">
				<b>Report</b>
			</button>

		</form>



</div>	


</body>
</html>
