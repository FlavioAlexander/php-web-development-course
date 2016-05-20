<?php
	include("top.html");
	$eeprograms = file_get_contents("programs/eeprogram.txt");
	$ceprograms = file_get_contents("programs/ceprogram.txt");
?>

	<div>
		<h1><img src="pictures/programdescription.png" alt="Program Description" /></h1>

		<h2>Electrical Engineering</h2>
			<p class="ece"><?=$eeprograms?></p>
		<h2>Computer Engineering</h2>
			<p class="ece"><?=$ceprograms?></p>
	</div>



<?php
	include("bottom.html");
?>