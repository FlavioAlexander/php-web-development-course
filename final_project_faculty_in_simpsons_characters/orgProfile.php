<?php
	include("top.html");
		$org = $_GET["organization"];
	?>
	<div>
		<h1><?=$org?></h1>
		<?php
			$newFile = file_get_contents("Orgs/".$org.".txt");
			list($firstHeader,$firstParagraph,$secondHeader,$secondParagraph) = explode(";",$newFile);
		?>
		
		<div class="paragraph">
			<h1><?=$firstHeader?></h1>
			<p>
				<?=$firstParagraph?>
			</p>
		</div>
		<div class="paragraph">
			<h1><?=$secondHeader?></h1>
			<p>
				<?=$secondParagraph?>
			</p>
		</div>
	</div>
<?php
	include("bottom.html");
?>