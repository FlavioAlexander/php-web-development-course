<?php
	include("top.html");
		$NumOrgs = count(glob("Orgs/*.txt")); #gets number of organization by counting number of files in folder
		$orgs = glob("Orgs/*.txt");#sets an array with the path for each organization
?>
		<h1><img src="pictures/orgList.png" alt="Organization List" /></h1>
		

		<?php
			#If there's less than 7 organizations - write them to the left column
			if($NumOrgs<=7){
		?>
				<div class="leftColumn">
					<ul>
						<?php
							for($i = 0; $i<$NumOrgs; $i++){
						?>	
							<a href="orgProfile.php?organization=<?=basename($orgs[$i],".txt")?>"><li><?=basename($orgs[$i],".txt")?></li></a>
			<?php
				}#for
			?>
					</ul>
				</div>
			<?php
			}#if
			#If there's more than 7 organizations - write the first 7 to the left column
			#write the remaining in the right column
			else{
			?>
				<div class="leftColumn">
					<ul>
						<?php
							for($i = 0; $i<7; $i++){
						?>	
							<a href="orgProfile.php?organization=<?=basename($orgs[$i],".txt")?>"><li><?=basename($orgs[$i],".txt")?></li></a>
						<?php
							}#for
						?>
					</ul>
				</div>
				
				<div class="rightColumn">
					<ul>
						<?php
							for($i = 7; $i<$NumOrgs; $i++){
						?>	
							<a href="orgProfile.php?organization=<?=basename($orgs[$i],".txt")?>"><li><?=basename($orgs[$i],".txt")?></li></a>
						<?php
							}#for
						?>
					</ul>
				</div>

<?php
			}#else
	include("bottom.html");
?>

