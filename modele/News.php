<meta charset="UTF-8">
<?php
include 'connexion_PDO.php';
function GetNewsDatabase()
{ 
	include 'connexion_PDO.php';
	$News_idBDD = $connexion->prepare('SELECT News_id, Title FROM news');
	$News_idBDD->execute();
	$News_id2 = $News_idBDD->fetchAll();
	return $News_id2;
};

function PrintNews($News_id2)
{
	include 'connexion_PDO.php';
	$i=0;
	while ($i<count($News_id2))
	{
	$i++;
	$NewsData = $connexion->prepare('SELECT Title, Content FROM news WHERE News_id=' . $i);
	$NewsData->execute();
	$News = $NewsData->fetch();
	echo "<div class='news'>
		 <h2>" . $News['Title'] . "</h2><br>
		 <h3>" . $News['Content'] . "</h3><br>
		</div>
	   ";
	}
	unset($value);
}
GetNewsDatabase();
PrintNews(GetNewsDatabase());
?>