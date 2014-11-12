<?php
require 'vendor/autoload.php';
?>


<?php 
session_start();

		
		
			if (!isset($_SESSION['Pseudo'])) {
			$_SESSION['Pseudo'] = $_POST['Pseudo'];
			
			
			
			} 
			
			

			
			
$pseudo_session = $_SESSION['Pseudo'];	

		
			
if (empty($_SESSION['Pseudo'])){


echo "<script> document.location.href = 'pages/connexion.php'; </script> ";



}			
	if (!isset($_SESSION['Player_id'])) {	
		
		include 'include/connexion_PDO.php';

		$sth = "SELECT User_id FROM user WHERE Pseudo = '$pseudo_session'";
	
		foreach  ($connexion->query($sth) as $row) {
		
			$_SESSION['Player_id'] = $row['User_id'];
			
			$Player_id = $_SESSION['Player_id'];
		
		}
	}	
?>

<?php include 'lib/header.php';?>

<div id="news_mail"></div>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6"></div>
	<div class="col-md-3"></div>
</div>




<?php include 'lib/footer.php';?>
