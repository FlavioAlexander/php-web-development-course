<?php
	include("top.html");
	$requestType = $_POST["requestType"];
	$userName = $_POST["userName"];
	
	#if name is set then process page otherwise redirect to login.php because user did not login
	if(isset($userName)){
	
		if($requestType == "create"){
				$name = $_POST["name"];
				$description = $_POST["description"];
				$courses = $_POST["courses"];
				
				//Create folder and give it full access
				mkdir("Faculty/".$name."/",0700);
				
				//obtain picture and write it to folder as profile.jpg
				$filename =  $_FILES["profile"]["name"];
				if(is_uploaded_file($_FILES["profile"]["tmp_name"])){
					move_uploaded_file($_FILES["profile"]["tmp_name"], "Faculty/".$name."/profile.jpg");
				}
				
				//obtain real picture and write it to folder as real.jpg
				$filename =  $_FILES["real"]["name"];
				if(is_uploaded_file($_FILES["real"]["tmp_name"])){
					move_uploaded_file($_FILES["real"]["tmp_name"], "Faculty/".$name."/real.jpg");
				}				
				
				//write the description
				file_put_contents("Faculty/".$name."/description.txt",$description);
				
				//write the courses taught
				foreach($courses as $course){
					file_put_contents("Faculty/".$name."/courses.txt",$course.PHP_EOL, FILE_APPEND);
				}
				
				/* READ STRAIGHT FROM FOLDER NAMES
				//add professor to faculty.txt file
				file_put_contents("Faculty/faculty.txt",$name.PHP_EOL, FILE_APPEND);
				chmod("Faculty/faculty.txt", 0666); #give full permission to file
				*/
				header('Location:admin.php?name='.$userName);#redirect user

		}#create
		
		elseif($requestType == "delete"){
			
			$peopleToDelete = $_POST["professors"]; #get from admin what people to delete
			$professors = file("Faculty/faculty.txt");
			

			foreach($peopleToDelete as $person){
				//Delete every file associated with this person
				$filesInFolder = glob("Faculty/".$person."/*.*");
					foreach($filesInFolder as $file){
						unlink($file);
					}
				//remove the folder associated with the person associated
				rmdir("Faculty/".$person);#delete folder
			}

				header('Location:admin.php?name='.$userName);#redirect user
		}#delete

?>
	
<?php
	}#if name is not set
	else{
		header('Location: login.php');
	}
	include("bottom.html");
?>