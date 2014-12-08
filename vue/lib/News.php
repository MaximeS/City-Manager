<?php
function GetNewsDatabase()
{ 
	include '../../controleur/connexion_PDO.php';
	$News_id = $connexion->prepare('SELECT News_id FROM news');
	$News_id->execute();
	return $News_id;
}

function PrintNews($News_id)
{
	foreach ($News_id as $value)
	{
	$NewsData = $connexion->prepare('SELECT * FROM news');
	$NewsData->execute();
	$News = $NewsData->fetchAll();
	echo "<div class='news'>
		 <h2>".$News['news_title']."</h2><br>
		 <h3>".$News['news_content']."</h3><br>
		</div>
	   ";
	}
	unset($value);
}

PrintNews(GetNewsDatabase());
?>