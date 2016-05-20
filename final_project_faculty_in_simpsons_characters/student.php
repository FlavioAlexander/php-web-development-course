<?php
	include("top.html");
	$name= $_GET["name"];
	$courses = file("Student/".$name."/CourseGrade.txt");
	if(isset($name)){
?>
<h1>Hello <?=$name?></h1>


<table>
<tr>
<th>Course</th><th>Grades</th>
</tr>
<?php
foreach($courses as $course){
list($coursenum,$grade) = explode(",",$course);
?>
<tr>
<td><?=$coursenum?></td><td><?=$grade?></td>
</tr>


<?php
}
?>


</table>
	<p>
		<a id="logout" href="login.php"><img src="pictures/logout.png" alt="Log Out" /></a>
	</p>
<?php
}
else
{
	header('Location:login.php');
}

	include("bottom.html");
?>
