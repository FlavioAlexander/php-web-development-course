<?php
	include("top.html");
?>
		<!-- Simpsons Song -->
		<audio autoplay="autoplay" >
			<source src="home/SimpsonsSong.mp3" type="audio/mpeg">
		</audio>
<div class="slider">

<!--gets the profile images from every professor's folder-->
<?php
$counter = 1;
foreach(glob("Faculty/*/profile.jpg") as $image)
{
?>

<img id="<?=$counter?>" src="<?=$image?>" alt="images"/>

<?php
$counter++;	
}#for loop
?>
</div>

<!--gets the description of the project form home folder-->
<?php
$description=file_get_contents("home/description.txt");
?>
<p id="descri"><?=$description?></p>

<?php
	include("bottom.html");
?>



