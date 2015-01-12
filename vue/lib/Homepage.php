<link rel="stylesheet" type="text/css" href="vue/css/central.css">

Bienvenue sur la homePage !

<a href="controller/DestroySession.php"> deconnexion </a>

</br></br>

<div class="container">
 
 <h1> HOMEPAGE </h1>
 
 </br></br>
 
 Bienvenue sur la homePage ! 

 
 
 </div>

 <a href="/City-Manager/hawk" > 
<div class="LeftMenu"> 


mon profil  

<?php

	echo $_SESSION['Player_id'];
	echo $_SESSION['Player_pseudo'];
?>

</div>
</a>
</br></br>