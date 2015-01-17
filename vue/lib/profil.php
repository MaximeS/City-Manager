<meta charset="UTF-8">

</br></br>

</br></br>


	<div class ="PageName">
	
		<h1> <?php echo $Pseudo ?> </h1>
	
	</div>

<div class="container">
 
	</br></br>
	<img src="vue/images/charaleft.png" width="200px" > <img src="vue/images/character.png" width="300px" border="5px solid black"/> <img src="vue/images/chararight.png" width="200px" >
	</br> </br> </br>
	
	
 <h2> Liste des villes : </h2>
 

 <?php
include "modele/profil.php";
foreach ($cities as $city) {
	
	$cityname = $city['Name'];
	$pseudo = $_SESSION['Player_pseudo'];

	echo "<a href='/City-Manager/".$pseudo."/".$cityname."'><div class='citydiv'><h2><u>".$cityname."</u></h2><br> <b> Or </b> : "
	.$city['Gold']."<br> <b> Soldats </b> : "
	.$city['Soldiers']."<br> <b> Or par secondes : </b>  "
	.$city['Gold_s']."<br> <b> Soldats par secondes : </b>  "
	.$city['Soldiers_s']."<br> </br>"
	
	."<form method='POST' action='/City-Manager/".$pseudo."/".$cityname."'>
	
	</h3></div></a> <br><br>";

}
	

;?>
</br></br>
 
 
 </div>
 
 <div class="LeftMenuB">
 
	<h1>
<?php

	echo "<h2>".$Pseudo."</h2>";
	
	include "modele/profilvalues.php";
	
	echo "<b> Or total : </b> ".totalgold($Player_id, $connexion)."</br>";
	echo " <b> total des armées : </b>".totalSoldier($Player_id, $connexion)."</br>";
	
?>
</h1>
</br>
 
	</br>
	<a href="/City-Manager/addcity"> <div class="MenuButton"> nouvelle ville  </div> </a>
	</br></br>
	<a href="/City-Manager/erasecity"> <div class="MenuButton"> raser une ville  </div> </a>
	</br>
 </div>