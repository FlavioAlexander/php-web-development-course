<?php
	include("top.html");
	$name = $_GET["name"];
	
	#if name is set then process page otherwise redirect to login.php because user did not login
	if(isset($name)){
?>
	<h1>Hello <?=$name?></h1>
	<form action="admin-submit.php" method="post">
		<fieldset >
			<legend>Admin Options</legend>
			<p>
				<label class="AdminOptions">Create Professor Profile</label> 
				<input type="radio" name="request" value="create" checked="checked"/>
				<br />
				<label class="AdminOptions">Delete Professor Profile</label> 
				<input type="radio" name="request" value="delete" />
				<input type="hidden" name="userName" value="<?=$name?>" />
			</p>
			<input type="submit" value="Submit" />
		</fieldset>	
	</form>
	<p>
		<a id="logout" href="login.php"><img src="pictures/logout.png" alt="Log Out" /></a>
	</p>
<?php
	}#if name is not set
	else{
		header('Location: login.php');
	}
	include("bottom.html");
?>