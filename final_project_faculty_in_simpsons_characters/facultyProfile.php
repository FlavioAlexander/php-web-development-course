<?php
	include("top.html");
	$professor = $_GET["professor"];
?>

<!--Gets both images from the directory-->
<?php
$profiles=glob("Faculty/$professor/profile.jpg");
$reals=glob("Faculty/$professor/real.jpg");
?>


<!-- will get the profile pictures-->
<?php
foreach($profiles as $profile)
{
?>
<div id="picProfile"><img src="<?=$profile?>" alt="prifleImages"/></div>
<?php
}
?>

<!--will get the real picture of selected professor-->
<?php
foreach($reals as $real)
{
?>
<div id="picReal"><img src="<?=$real?>" alt="prifleImages"/></div>
<?php
}
?>

<h1 class="title"><img src="pictures/personalProfile.png" alt="personal Profile"/></h1>
<h1 class="titleName"><?=$professor?></h1>

<!--reads the description of every single professor from the professor's folder-->
<?php
$description = file_get_contents("Faculty/$professor/description.txt");

?>
<p id="professorDescri"><?=$description?></p>

<h1 id="coursesTeaching"><img src="pictures/coursesTeaching.png" alt="courses teaching"/></h1>

<!--to get the courses every professor is teaching from their personal folder-->
<ul id="courses">
<?php
$courses = file("Faculty/$professor/courses.txt");
foreach($courses as $course)
{
?>
<li><?=$course?></li>
<?php
}#for loop
?>
</ul>


<?php
	include("bottom.html");
?>