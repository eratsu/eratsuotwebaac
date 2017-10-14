<?php
require  'medoo.php';

$login = $_POST['account'];
$senha = $_POST['password'];



$sql = $database->select("accounts", "*", [	
	"AND" => [	    
		"name" => $login,
		"password" => $senha
	]
]);

// $getname = $database->query('SELECT `nome` FROM `login_usuario` WHERE `email` = $login AND `senha` =  $senha');
$getname = $database->get("accounts", "*", [
    "AND" => [	    
		"name" => $login,
		"password" => $senha
	]
  ]);


if($sql){
	    session_start();	         	
     	$_SESSION['nome'] = $getname["nome"];
	    $_SESSION['login'] = $login;
	    $_SESSION['senha'] = $senha;
	    header('location:index.php');

}else{
	    session_destroy();
     	unset ($_SESSION['nome']);
	    unset ($_SESSION['login']);
	    unset ($_SESSION['senha']);	 
	    header('location:login.php');	
}



// if ($sql > 0) {
    
//     session_start();
     
//     $_SESSION['login'] = $login;
//     $_SESSION['senha'] = $senha;

//     header('location:index.php');

// }

// else {
    
//     session_destroy();
 
    
//     unset ($_SESSION['login']);
//     unset ($_SESSION['senha']);
 
//     header('location:login.php');
     
// }
?>