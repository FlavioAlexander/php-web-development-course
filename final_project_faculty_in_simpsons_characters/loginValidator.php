<?php
	//HOME.PHP has hidden form that gets invoked with the javascript variables
	$userNameRequest = $_POST["username"];
	$psswRequest = $_POST["password"];
	$userArray = array();
	$userPassword = array();
	
	#create array with all user IDs in system
	foreach($logIn = file("LogIn.txt") as $user){
		list($id,$accountType,$pssw,$name) = explode(",",$user);
		array_push($userArray, $id);
		array_push($userPassword, $pssw);
	}	
	
	/*
		Redirect user to correct page if user ID submitted exists in the array of IDs and if it does, check if the
		password corresponds to that same user
		Depending if accountType is "A" (Admin) or "S" Student, user gets redirected to correct page.
		If user does not exist in Array of IDs, redirect user to invalid.html that informs user of incorrect login
	*/
	if(in_array($userNameRequest, $userArray)){
		if(in_array($psswRequest, $userPassword)){
			foreach($logIn = file("LogIn.txt") as $user){
				list($id,$accountType,$pssw,$name) = explode(",",$user);
				if($userNameRequest == $id && $psswRequest == $pssw){
					if($accountType == "A"){
						#user id Admin - redirect to admin.php and send user's name as parameter.
						header('Location: admin.php?name='.$name); 
					}
					
					else if($accountType == "S" ){
						#user id Student - redirect to student.php and send user's name as parameter.
						header('Location: student.php?name='.$name);
					}
				}#check user id and password
			}#foreach
		}#check password exists in system/in_array($psswRequest, $userPassword)
		else{ #if user exists and password does not exist redirect to invalid password
			header('Location: invalidPassword.html');	
		}		
	}#check user exists in system/ in_array($userNameRequest, $userArray)
	else{#else if the user does not exist in the system redirect to invalid user
		#inform user of incorrect login
		#print '<script type="text/javascript">alert("Invalid User"); </script>';
		header('Location: invalidUser.html');	
	}//else		
	
	
		
?>