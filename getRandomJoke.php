<?php
echo "hi";

require_once('./databaseConnector.php');
connectToDatabase();

$joke = getGoodJoke();
echo $joke;

function getGoodJoke()
{
	$query = "SELECT * FROM `jokes` WHERE ups>downs ORDER BY RAND() LIMIT 1";
	$result = mysql_query($query) or exit("Failed to get good joke.");
	
	while($row = mysql_fetch_array($result))
	{
		$data_text = $row["text"];
		$data_jokester = $row["jokester"];
		$data_ups = $row["ups"];
		$data_downs = $row["downs"];
		$data_favorites = $row["favorites"];
		$data_variations = $row["variations"];
		$data_master = $row["master"];
		$data_id = $row["id"];
	}
	$data = Array("text"=>$data_text,"jokester"=>$data_jokester,
			"ups"=>$data_ups,"downs"=>$data_downs,"favorites"=>$data_favorites,
			"variations"=>$data_variations,"master"=>$data_master,
			"id"=>$data_id);
	$returnData = json_encode($data);
	return $returnData;
}

?>