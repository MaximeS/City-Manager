<meta charset="UTF-8">
<?php
include 'connexion_PDO.php';
function GetNewsDatabase()
{ 
	include 'connexion_PDO.php';
	$NewsBDD = $connexion->prepare('SELECT * FROM news ORDER BY Date');
	$NewsBDD->execute();
	$News2 = $NewsBDD->fetchAll();
	return $News2;
};

/*function PrintNews($News_id2)
{
	include 'connexion_PDO.php';
	$i=0;
	foreach ($News_id2 as $id)
	{
	$NewsData = $connexion->prepare('SELECT Title, Content, Date FROM news ORDER BY Date');
	$NewsData->execute();
	$News = $NewsData->fetch();
	echo "<div class='news'>
		 <h2>" . $News['Title'] . "</h2><br>
		 <h3>" . $News['Content'] . "</h3><br>
		</div>
	   ";
	}
	unset($value);
}*/

//GetNewsDatabase();
//PrintNews(GetNewsDatabase());
?>