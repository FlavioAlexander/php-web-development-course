<?php
	include("top.html");
?>
	<h1><img src="pictures/loginPage.png" alt="Log In" /></h1>
		<form action="loginValidator.php" method="post">
			<fieldset>
				<legend>Login</legend>
				<label>User ID</label>
				<input type="text" name="username" required="required" autofocus="autofocus"/>
				<br />
				<label>Password</label>
				<input type="password" name="password" required="required"/>
				<input type="submit" value="LogIn" />
			</fieldset>
		</form>
<?php
	include("bottom.html");
?>

