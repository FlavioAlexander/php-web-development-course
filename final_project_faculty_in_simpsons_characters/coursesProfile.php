<?php
	include("top.html");
	$cours = $_GET["courses"];
?>
	<div>
		<h1><?=$cours?></h1>
			<?php
				$newFile = file_get_contents("Courses/".$cours.".txt");
				list($firstHeader,$firstParagraph) = explode(";",$newFile);
			?>
		
		<div class="paragraph">
			<h1><?=$firstHeader?></h1>
			<p>
				<?=$firstParagraph?>
			</p>
		</div>
	
	</div>
	
<?php
	include("bottom.html");
?>