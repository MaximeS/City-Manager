

<link rel="stylesheet" media="screen" type="text/css" href="vue/css/general.css"/>

	<?php
	
	
		include "modele/GetCityValues.php";
	
	
	?>

	<div class ="PageName">
	
		<h1>	<?php echo $City_name; ?> </h1>
	
	</div>
	
	<div class ="container">
	
		</br></br>
		<img src="../vue/images/city_view.png" width="830px" border="5px solid black"/>
	
		</br></br>
		
		<div class="cityInfo">
		
			<h1> 
				Informations : 
				<form method="post"> 
					<input type = 'submit' value='rafraîchir'>
				</form>
			</h1>
			
			<div class="info"> <h2> <b><u> HP </u>: </b> <div class="infovar"> <?php echo $life; ?> </div> </div><h2>
			<div class="info"> <h2> <b><u> Or </u>: </b> <div class="infovar"> <?php echo $gold; ?> </div> </div><h2>
			<div class="info"> <h2> <b><u> revenus </u>: </b> <div class="infovar"> <?php echo $gold_s; ?> <b> Or/secondes </b></div> </div> <h2> 
			<div class="info"> <h2> <b><u> Soldats </u>: </b> <div class="infovar"> <?php echo $soldier; ?> </div> </div><h2>
			<div class="info"> <h2> <b><u> enrôlement </u>: </b> <div class="infovar"> <?php echo $soldier_s; ?> <b> soldats/secondes </b></div> </div> <h2> 
			
			
			
		</div>
		
		</br></br>
		
	</div>
	
	
	<div class="RightMenu">
	
		</br>
			<h1> Bâtiments </h1>
		</br>
		
		<div class="MenuButtonR"> 
			<form method="POST" id="Factory_form" action="../modele/ImproveFactory.php" >
			
			</br>
				<img src="../vue/images/Factory.jpg" width="50px" border="2px solid black"/> <h3>  Améliorer l'usine </h3>
				
				<b> Niv : </b> <?php echo $factory; ?></br>
				<b> Prix : </b> <?php echo $costFactory; ?>
				</br></br>
				
				<input type='hidden' name='city_id' value =' <?php echo $City_id; ?>'>
				<input type='hidden' name='city_name' value ='<?php echo $City_name; ?>'>
				<input type='hidden' name='cost' value = '<?php echo $costFactory; ?>'>
				<input type='hidden' name='money' value ='<?php echo $gold; ?>'>
				
				
				
				<input type = 'submit' value='Améliorer !'>
			
			
			</form>
		</div>
	
		</br></br>
	
		<div class="MenuButtonR"> 
			<form method="POST" id="Barrack_form" action="../modele/ImproveBarrack.php" >
			</br>
				<img src="../vue/images/Barracks.jpg" width="50px" border="2px solid black"/> <h3>  Améliorer la caserne </h3>
				
				<b> Niv : </b> <?php echo $barrack; ?></br>
				<b> Prix : </b> <?php echo $costBarrack; ?>
				</br></br>
				
				<input type='hidden' name='city_id' value =' <?php echo $City_id; ?>'>
				<input type='hidden' name='city_name' value ='<?php echo $City_name; ?>'>
				<input type='hidden' name='cost' value = '<?php echo $costBarrack; ?>'>
				<input type='hidden' name='money' value ='<?php echo $gold; ?>'>
				
				
				
				<input type = 'submit' value='Améliorer !'>
			
			
			</form>
		</div>
	
		</br></br>
		
		<div class="MenuButtonR"> 
			<form method="POST" id="Barrack_form" action="../modele/ImproveWall.php" >
			</br>
				<img src="../vue/images/Wall.jpg" width="50px" border="2px solid black"/> <h3>  Améliorer les remparts </h3>
				
				<b> Niv : </b> <?php echo $wall; ?></br>
				<b> Prix : </b> <?php echo $costWall; ?>
				</br></br>
				
				<input type='hidden' name='city_id' value =' <?php echo $City_id; ?>'>
				<input type='hidden' name='city_name' value ='<?php echo $City_name; ?>'>
				<input type='hidden' name='cost' value = '<?php echo $costBarrack; ?>'>
				<input type='hidden' name='money' value ='<?php echo $gold; ?>'>
				
				
				
				<input type = 'submit' value='Améliorer !'>
			
			
			</form>
		</div>
	
		</br></br>
	
	</div>
	
	<div class="LeftMenuB">
	
		aaa
	
	
	</div>
 

	