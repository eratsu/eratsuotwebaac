<?php


function getPlayersOnline($db){
	$count = $db->count("players", [
		"online" => 1
	]); 
	 
	return $count; 
	
}

?>