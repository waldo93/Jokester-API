<?php

require_once("./databaseConnector.php");
connectToDatabase();

addJoke();
return 1;

function addJoke()
{
	$text = $_POST["text"];
	$jokester = $_POST["jokester"];
	$master = $_POST["master"];
	
	$query = "INSERT INTO `jokes` (text, jokester, ups, downs, " .
			"favorites, variations, master) VALUES ('" .
			$text . "', '" . $jokester . "', 0, 0, 0, 0, " .
			$master . ");";
	mysql_query($query) or exit("Failed to add joke.");
}

?>