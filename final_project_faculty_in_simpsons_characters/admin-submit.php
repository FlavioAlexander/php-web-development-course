<?php
	include("top.html");
	$requestType = $_POST["request"];
	$userName = $_POST["userName"];
	
	#if name is set then process page otherwise redirect to login.php because user did not login
	if(isset($userName)){
		if($requestType == "create"){
		?>
			<form action="process-request.php" method="post" enctype="multipart/form-data">
			<fieldset class="CreateProfileForm">
				<legend>New Profile</legend>
				<label>Professor's Name</label>
				<input type="text" name="name" /> <br />
				<label>Profile Picture</label>
				<input type="file" name="profile" accept="image/*"/> <br />
				<label>Real Picture</label>
				<input type="file" name="real" accept="image/*"/> <br />
				<label>Description</label>
				<textarea rows="5" cols="12" name="description"/> 
				</textarea><br />
				<label>Courses Teaching:</label>
				<select name="courses[]"  multiple="multiple" size="5" />

					<?php
					$scanned_directory = array_diff(scandir("Courses"), array('..', '.'));
					foreach($scanned_directory as $course){
				?>		
						<option id="courses"><?=basename($course,".txt")?></option>		
				<?php	

					}
				?>
				</select>
				<br />
				<input type="hidden" name="requestType" value="create" />
				<input type="hidden" name="userName" value="<?=$userName?>" />
				<input type="submit" value="Submit" />	
			</fieldset>
		
			</form>
			
		<?php
		}#create
		else if($requestType == "delete"){
		?>
			<form action="process-request.php" method="post">
			<fieldset>
			<legend>Delete Profile</legend>
				<select name="professors[]"  multiple="multiple" size="5" />

				<?php
					$scanned_directory = array_diff(scandir("Faculty"), array('..', '.'));
					foreach($scanned_directory as $professor){
				?>		
						<option id="professors"><?=$professor?></option>	
				<?php	
					}
				?>
				</select>
				<br />
				<input type="hidden" name="requestType" value="delete" />
				<input type="hidden" name="userName" value="<?=$userName?>" />
				<input type="submit" value="Submit" />	
			</fieldset>
		
			</form>
		<?php
		}#delete

?>
		<p>
			<a href="admin.php?name=<?=$userName?>"><img src="pictures/goBack.png" alt="Go Back" /></a>
		</p>
<?php
	}#if name is not set
	else{
		header('Location: login.php');
	}
	include("bottom.html");
?>