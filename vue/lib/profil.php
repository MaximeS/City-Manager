<meta charset="UTF-8">

<h1> Vous êtes sur le profil de <?php echo $Pseudo ?> ! </h1>



	<div class="container">
 
 <h1> <?php echo $Pseudo ?> </h1>
 
 </br></br>
 
 Vous êtes sur le profil de <?php echo $Pseudo ?> !
 
 </br></br>
 <?php
include "modele/profil.php";
foreach ($cities as $city) {
	
	$cityname = $city['Name'];
	$pseudo = $_SESSION['Player_pseudo'];

	echo "<a href='/City-Manager/".$pseudo."/".$cityname."'><div class='citydiv'><h3>".$cityname."<br><br> <b> Or </b> : "
	.$city['Gold']."<br> <b> Soldats </b> : "
	.$city['Soldiers']."<br><br>"
	."<form method='POST' action='/City-Manager/".$pseudo."/".$cityname."'>
	
	</h3></div></a> <br><br>";

}
	

;?>

 
 
 </div>