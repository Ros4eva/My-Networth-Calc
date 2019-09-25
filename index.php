<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/signUp.css">
	<title>Sign Up</title>
</head>
<body>
	<div>
		<div>
			<header>
				<h1>Welcome</h1>
			</header>
		</div>
		<div id="container">
			<div class="left contain">
				<div class="left-content">
					<p Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna.></p>
				</div>
			</div>
			<div class="right contain">
				<div align="right">
					<span><a href="login.php"> already have an account?</a></span>
				</div>
				<div align="center">
					<h1 class="create-acc">Create Account</h1>
					<div>
						<p class="reg-p">You are a step away from knowing your financial worth.</p>
					</div>
					
				</div>
				<div id="regForm" align="center">
					<form name="regForm" action="" method="post" onsubmit="return validateForm()">
					<div id="alert">
						<p id="message"></p>
					</div>
					<div>
						<input type="text" name="firstName" placeholder="First Name">
					</div>

					<div>
						<input type="text" name="lastName" placeholder="Last Name">
					</div>

					<div>
						<input type="email" name="email" placeholder="Email">
					</div>

					<div>
						<input type="password" name="password" placeholder="Password">
					</div>

					<div>
						<input type="password" name="confirmPassword" placeholder="Confirm Password">
					</div>

					<div>
						<span><p>By registering, you agree to our <a href="#">Term & Conditions</a></p></span>
					</div>

					<div>
						<input type="submit" name="submit" value="Create Account" onclick="myFunction()">
					</div>
				</form>
				</div>
			</div>
		</div>

		<div>
			<script src="js/signUp.js"></script>
		</div>
	</div>

</body>
</html>