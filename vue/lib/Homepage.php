<link rel="stylesheet" type="text/css" href="vue/css/central.css">

<?php

	$Player_pseudo = $_SESSION['Player_pseudo'];

?>

Bienvenue sur la homePage !

<a href="controller/DestroySession.php"> deconnexion </a>

</br></br>

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

	echo $Player_pseudo;
?>
</h1>
</div>
</a>
</br></br>