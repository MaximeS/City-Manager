<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="vue/css/general.css">

<?php

	$Player_pseudo = $_SESSION['Player_pseudo'];
	$Player_id = $_SESSION['Player_id'];

?>

</br></br>

</br></br>

<div class ="PageName">
	
		<h1> Acceuil </h1>
	
	</div>


<div class="container">
 
 <h1> HOMEPAGE </h1>
 
 </br></br>
 
 Bienvenue sur la homePage ! 

 
 
 </div>

 <a href="/City-Manager/<?php echo $Player_pseudo; ?>" > 
<div class="LeftMenu"> 


mon profil  :

</br>
</br>
<h1>
<?php

	echo "<h3>".$Player_pseudo."</h3>";
	
	include "modele/profilvalues.php";
	
	echo "Or total :".totalgold($Player_id, $connexion)."</br>";
	echo "total des armées :".totalSoldier($Player_id, $connexion)."</br>";
	
?>
</h1>
</div>
</a>
</br></br>