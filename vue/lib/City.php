

<link rel="stylesheet" media="screen" type="text/css" href="vue/css/general.css"/>

<?php

	include 'modele/connexion_PDO.php';

	$Player_id = $_SESSION['Player_id'];

	include "connexion_PDO.php";
	$req=$connexion->prepare('SELECT * FROM city WHERE User_id=:id ' );
	$req->execute(array('id'=>$City_id));
	$cities=$req->fetchAll();

	foreach ($cities as $city){

		$citygold = $city['Gold'];
		$gold_s = $city['Gold_s'];
		$factory = $city['Factory'];
	
	
		$soldier = $city['Soldiers'];
		$soldier_s = $city['Soldiers_s'];
		$barrack = $city['Barracks'];
	
		$costFactory = 50* 3*$factory = $city['Factory'];
		$costBarrack = 50* 3*$factory = $city['Factory'];
}



;?>

	<div class="LeftMenuR">
	
		</br></br>
		
		<div class="MenuButtonR"> 
			<form method="POST" action="../modele/ImproveFactory.php" >
			
				<h3> Améliorer l'usine </h3>
				<b> Prix : </b>
				</br></br>
				<?php echo " ".$City_id." ".$City_name; ?>
				<input type='hidden' name='city_id' value =' <?php echo $City_id; ?>'>
				<input type='hidden' name='city_name' value ='<?php echo $City_name; ?>'>
				<input type='hidden' name='cost' value = '<?php //echo $costFactory; ?>'>
				<input type='hidden' name='money' value ='<?php //echo $gold; ?>'>
				
				<?php echo $citygold; ?>
				
				<input type = 'submit' value='Améliorer !'>
			
			
			</form>
		</div>
	
		</br></br>
	
		<div class="MenuButtonR"> 
			aaa
		</div>
	
		</br></br>
	
	</div>
 
<?php
	


if (!empty($_SESSION['Message'])){
	
		$message = $_SESSION['Message'];
		echo "<script> alert('$message'); </script>;";
		
		unset($_SESSION['Message']);
	}	
	
?>
