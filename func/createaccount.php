<?php
require '../medoo.php';
//$create = $database->query("INSERT INTO `accounts` (`id`, `name`, `password`, `secret`, `type`, `premdays`, `lastday`, `email`, `creation`) VALUES ('1', '1', '356a192b7913b04c54574d18c28d46e6395428ab', NULL, '3', '365', '0', '', '0');")
//checar se a conta existe $_POST["accountname"]
$check = $database->select("accounts","name",["name" => 2305302]);

if(!$check){
 echo "nao existe";
} else {
	echo "já existe";
}


?>