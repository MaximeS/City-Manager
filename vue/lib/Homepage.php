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
 
 <h2> News : </h2>

 </br>
 <?php
include "modele/News.php";
include 'modele/connexion_PDO.php';
	
	$NewsBDD=GetNewsDatabase();
	foreach ($NewsBDD as $News)
	{
	//$NewsData = $connexion->prepare('SELECT Title, Content, Date FROM news ORDER BY `Date`');
	//$NewsData->execute();
	//$News = $NewsData->fetch();
	echo "<div class='newsdiv'>
		".$News['Date'] ." <h2><u>". $News['Title'] . "</u></h2><br>
		 <h4>" . $News['Content'] . "</h4><br>
		</div><br/><br/>
	   ";
	}
	unset($value);

;?>
</br></br>

 </br></br>
 
 </div>

 <a href="/City-Manager/<?php echo $Player_pseudo; ?>" > 
<div class="LeftMenuB"> 


<u>mon profil  :</u>

</br>
</br>
 
	<h1>
<?php

	echo "<h2>".$Player_pseudo."</h2>";
	
	include "modele/profilvalues.php";
	
	echo "<b> Or total : </b> ".totalgold($Player_id, $connexion)."</br>";
	echo " <b> total des armées : </b>".totalSoldier($Player_id, $connexion)."</br>";
	
?>
</h1>
</div>
</a>
</br></br>