<?php
	include("top.html");
	$scanned_directory = array_diff(scandir("Faculty"), array('..', '.'));
	$counter = count(scandir("Faculty"));//gets the number of directories
?>

<!--the tile if the page is an image-->
<h1><img src="pictures/professorList.png" alt="professor list"/></h1>


<!--If we have less than 7 professors, only one column would be displayed-->
<?php
	if ($counter<=7)
	{
?>
	<div class="leftColumn">
		<ul>
		<?php
		for ($i=0; $i<$counter;$i++)
		{
		?>
			<a href="facultyProfile.php?professor=<?=$professor?>"><li><?=$professor?></li></a>
<?php
}
?>
</ul>
	</div>
	<?php
	} #if statement
	
#if we have more than 7 professors, wi will have multiple columns with 7 professors in each one-->	
	else
	{
	
#7 professors will go to the farest left column	
	?>
	<div class="leftColumn">
		<ul>
		<?php
		for ($i=2; $i<9;$i++)
		{
		?>
<a href="facultyProfile.php?professor=<?=$scanned_directory[$i]?>"><li><?=$scanned_directory[$i]?></li></a>
<?php
}#for loop
?>
</ul>
</div>

<!--the next 7 in the list will go to the right side-->
<div class="rightColumn">
<ul>
<?php
		for ($i=9; $i<$counter;$i++)
		{
		?>
<a href="facultyProfile.php?professor=<?=$scanned_directory[$i]?>"><li><?=$scanned_directory[$i]?></li></a>
<?php
}#for loop
?>
</ul>
</div>


<?php
} //close else
?>


<?php
	include("bottom.html");
?>