
<?php
	include("top.html");
	$NumCourses = count(glob("Courses/*.txt")); 
	$cours = glob("Courses/*.txt");
?>
	<h1><img src="pictures/courseslist.png" alt="Courses List" /></h1>
		
	<div class="centercolumn">
		<?php
			
			if($NumCourses<=7){
		?>
		
				<div class="leftcolum">
					<ul>
						<?php
							for($i = 0; $i<$NumCourses; $i++){
						?>	
							<a href="coursesProfile.php?courses=<?=basename($cours[$i],".txt")?>">
							<li><?=basename($cours[$i],".txt")?></li></a>
			<?php
				}
			?>
					</ul>
				</div>
			<?php
			}
			
			
			else{
			?>
				<div class="leftcolum">
					<ul>
						<?php
							for($i = 0; $i<7; $i++){
						?>	
							<a href="coursesProfile.php?courses=<?=basename($cours[$i],".txt")?>">
							<li><?=basename($cours[$i],".txt")?></li></a>
						<?php
							}
						?>
					</ul>
				</div>
				
				<div class="rightcolum">
					<ul>
						<?php
							for($i = 7; $i<$NumCourses; $i++){
						?>	
							<a href="coursesProfile.php?courses=<?=basename($cours[$i],".txt")?>">
							<li><?=basename($cours[$i],".txt")?></li></a>
						<?php
							}
						?>
					</ul>
				</div>
		</div>
<?php
			}
	include("bottom.html");
?>
