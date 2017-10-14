<?php 

require 'medoo.php';

session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['nome']);
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a página de autenticação
    header('location:login.php');
} 


if (isset($_GET['action']) == "sair") {
  //Destrói
    session_destroy();
 
    //Limpa
    unset ($_SESSION['nome']);
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
     
    //Redireciona para a página de autenticação
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perfil Plast - Painel Administrativo</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">

    
  </head>
  <body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Perfil Plast - Painel Administrativo</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a >Bem-vindo <?php echo $_SESSION['nome']; ?></a></li>            
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="./index.php?action=sair">Sair</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php?pagina=home">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="index.php?pagina=tables">Tabela</a></li>
            <li><a href="index.php?pagina=usuarios">Usuários</a></li>
            <li><a href="#">Export</a></li>
          </ul>
<!--           <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul> -->
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


			 <?php 
	if(!isset($_GET['pagina']) || $_GET['pagina'] == ''){
		include "paginas/home.php";    
	}elseif(isset($_GET['pagina']) && $_GET['pagina'] != ''){
	    
	    if(file_exists('paginas/'.$_GET['pagina'].'.php')){
	        include "paginas/".$_GET['pagina'].'.php';}
	        elseif(file_exists('paginas/'.$_GET['pagina'].'.html')){
	            include "paginas/".$_GET['pagina'].'.html';
	        }else{
	            echo '                
					<div class="container">                             
					    <h1>A página acessada não está disponível ou não existe. </h1>
					    <a href="home" class="aviso_button">voltar ao site.</a>                
					</div>                
					<br><br><br><br>
					<center> Erro página não encontrada</center>
					<br><br><br>
					';
	        }            
	    }       
?>



        </div>
      </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>