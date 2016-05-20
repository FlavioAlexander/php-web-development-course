<?php include("top.html");?>

	
<?php
global $persongender;
global $personmin;
global $personmax;
global $personos;
$userName=$_GET["name"];
foreach(file("singles.txt") as $singlesFile) //checks if the name is in the text file
{
list($name,$gender,$age,$personality,$os,$min,$max)=explode(",",$singlesFile);//gets all the user information
if($name==$userName)
{
$persongender = $gender;
$personage = $age;
$personpersonality = $personality;
$personos = $os;
$personmin = $min;
$personmax = $max;
}
}
?>
<h1>Matches for <?=$userName?></h1>

<?php
foreach(file("singles.txt") as $singlesFile)
{
list($name,$gender,$age,$personality,$os,$min,$max)=explode(",",$singlesFile);
//checks for all the matchings
if($userName!=$name &&$persongender!=$gender &&
$age>=$personmin && $age<=$personmax && $personos==$os){	
						for($i = 0; $i<4; $i++){
							if($personpersonality[$i] == $personality[$i]){
							?>
						<div class="match">
							<p>
								<img src="user.jpg" alt="User Profile"/>
								<?=$name?>
							</p>
								<ul>
									<li><strong>gender:</strong> <?=$gender?></li>
									<li><strong>age:</strong> <?=$age?></li>
									<li><strong>type:</strong> <?=$personality?></li>
									<li><strong>OS:</strong> <?=$os?></li>
								</ul>	
						</div>
				<?php
						break;	
						}
					}
					}
					}
								
?>

<?php include("bottom.html");?>


