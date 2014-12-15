<?php
require 'vendor/autoload.php';
?>


<?php 
session_start();			
?>

<div class="row" id="body">
	<div class="col-md-offset-3 col-md-6" id="news_mail"></div>
	<div class="row col-md-offset-3 col-md-6">
		<div class="col-md-3"></div>
		<div class="col-md-6"></div>
		<div class="col-md-3"></div>
	</div>
</div>
<?php include 'controleur/cities_list.php';?>

</br></br>

<?php include 'controleur/Add_city.php';?>
