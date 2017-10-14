<?php require 'include/language.php'; ?>
<?php require 'include/medoo.php'; ?>
<?php require 'include/functions.php' ?>



<?php 
session_start(); 

if (!empty($_GET["idioma"])) { 
	$_SESSION["idioma"]=$_GET["idioma"]; 
} elseif (!$_SESSION["idioma"]) { 
	$_SESSION["idioma"]="portuguese"; 
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Oldera Online</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/flags.css" rel="stylesheet">

	<style>
		body{ background: url('img/bg-pattern.png'); padding-top: 50px !important;}
		.logo {padding-top: 100px; color: #fff;}

		.news h1 {font-size: 20px; margin-top: 0;}
		.news hr {margin-bottom: 0;}
		.news .info {color: #ababab;}
		.news .content {margin-bottom: 40px;}


	</style>

</head>

<body>
	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php?page=home">Oldera</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php?page=home"><?= $language[$_SESSION['idioma']]['menu']['home']; ?></a></li>
					<li><a href="index.php?page=about"><?= $language[$_SESSION['idioma']]['menu']['about']; ?></a></li>
					<li><a href="index.php?page=home"><?= $language[$_SESSION['idioma']]['menu']['forum'] ?></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?= $language[$_SESSION['idioma']]['menu']['library']; ?> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['exptable'] ?></a>
							</li>
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['serverinfo'] ?></a>
							</li>
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['wiki'] ?></a>
							</li>							
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?= $language[$_SESSION['idioma']]['menu']['community']; ?> <strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['characters'] ?></a>
							</li>
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['ban'] ?></a>
							</li>
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['whoonline'] ?></a>
							</li>
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['guilds'] ?></a>
							</li>
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['cast'] ?></a>
							</li>								
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['rewardsys'] ?></a>
							</li>
							<li>
								<a href="#"><?= $language[$_SESSION['idioma']]['menu']['guildwar'] ?></a>
							</li>
<!-- <li class="divider">
</li>
<li>
<a href="#">Separated link</a>
</li> -->
</ul>
</li>			

<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?= $language[$_SESSION['idioma']]['menu']['events']; ?> <strong class="caret"></strong></a>
	<ul class="dropdown-menu">
		<li>
			<a href="#">Tabela de Experiencia</a>
		</li>
		<li>
			<a href="#">Informações do Servidor</a>
		</li>								
	</ul>
</li>

<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?= $language[$_SESSION['idioma']]['menu']['account']; ?> <strong class="caret"></strong></a>
	<ul class="dropdown-menu">
		<li>
			<a href="#"><?= $language[$_SESSION['idioma']]['menu']['manageacc'] ?></a>
		</li>
		<li>
			<a href="#"><?= $language[$_SESSION['idioma']]['menu']['createacc'] ?></a>
		</li>
		<li>
			<a href="#"><?= $language[$_SESSION['idioma']]['menu']['downloadclient'] ?></a>
		</li>
		<li>
			<a href="#"><?= $language[$_SESSION['idioma']]['menu']['recoveracc'] ?></a>
		</li>								
	</ul>
</li>

<li><a href="#contact"><?= $language[$_SESSION['idioma']]['menu']['donate'] ?></a></li>
</ul>



<ul class="nav navbar-nav navbar-right">
	<li>
		<a href="index.php?page=signup"><?= $language[$_SESSION['idioma']]['menu']['signup'] ?></a>
	</li>
	<li>
		<a href="index.php?page=signin"><?= $language[$_SESSION['idioma']]['menu']['signin'] ?></a>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">

			<?php switch ($_SESSION['idioma']) {
				case 'portuguese':
				echo '<img src="img/blank.png" class="flag flag-br" alt="Português" />';
				break;

				case 'english':
				echo '<img src="img/blank.png" class="flag flag-us" alt="English" />';
				break;

				case 'spanish':
				echo '<img src="img/blank.png" class="flag flag-es" alt="Español"/>';
				break;

				case 'polsk':
				echo '<img src="img/blank.png" class="flag flag-pl" alt="Polsk"/>';
				break;

				default:
				echo '<img src="img/blank.png" class="flag flag-br" alt="Português" />';
				break;
			} ?>


			<strong class="caret"></strong></a>
			<ul class="dropdown-menu">
				<li>
					<a href="index.php?idioma=portuguese"><img src="img/blank.png" class="flag flag-br" alt="English" /> Português</a>
				</li>
				<li>
					<a href="index.php?idioma=english"><img src="img/blank.png" class="flag flag-us" alt="English" /> English</a>
				</li>
				<li>
					<a href="index.php?idioma=spanish"><img src="img/blank.png" class="flag flag-es" alt="Español"/> Español</a>
				</li>
				<li>
					<a href="index.php"><img src="img/blank.png" class="flag flag-pl" alt="Polsk"/> Polsk</a>
				</li>
				<li class="divider">
				</li>
				<li>
					<a href="#"><?= $language[$_SESSION['idioma']]['menu']['translate'] ?></a>
				</li>
			</ul>
		</li>
	</ul>

</div>
</div>
</nav>

<div class="banner" style="background: #172a3a url('img/banner.png') no-repeat; width: 100%; min-height: 300px; vertical-align: middle; background-position: 30% 0;">
	<div class="container logo">
		<img src="img/olderalogo.png" alt="">
	</div>
</div>

<div class="container" style="background: #fff; padding-top: 40px;">



	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-12 col-sm-9">

		<p class="pull-right visible-xs">
		  <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
		</p>

			<?php 
			if(!isset($_GET['page']) || $_GET['page'] == ''){
				include "paginas/home.php";    
			}elseif(isset($_GET['page']) && $_GET['page'] != ''){

				if(file_exists('paginas/'.$_GET['page'].'.php')){
					include "paginas/".$_GET['page'].'.php';}
					elseif(file_exists('paginas/'.$_GET['page'].'.html')){
						include "paginas/".$_GET['page'].'.html';
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

			<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">





				<a href="index.php?page=signin"><img src="img/jogueagora.png" alt=""></a>
				<br /><br />

				
				<?php if(fsockopen("127.0.0.1",7171)){ ?>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Server Status</h3>
					</div>
					<div class="panel-body">
						Status: Online <br />						
						Online: <?php echo getPlayersOnline($database); ?>
					</div>
				</div>         

				<?php } else {  ?>        

				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Server Status</h3>
					</div>
					<div class="panel-body">
						Status: Offline
					</div>
				</div>

				<?php } ?>




				<div class="list-group">
					<a href="#" class="list-group-item active">Events</a>
					<a href="#" class="list-group-item">Castle Siege - 12h remaining</a>
					<a href="#" class="list-group-item">War of Emperium - 1h remaining</a>
					<a href="#" class="list-group-item">Capture the Flag - 22m remaining</a>
					<a href="#" class="list-group-item">5vs5 - 10m remaining</a>
<!-- 					<a href="#" class="list-group-item">Link</a>
					<a href="#" class="list-group-item">Link</a>
					<a href="#" class="list-group-item">Link</a>
					<a href="#" class="list-group-item">Link</a>
					<a href="#" class="list-group-item">Link</a> -->
				</div>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; 2017 Oldera Online, Inc.</p>
		</footer>

	</div>


<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="offcanvas.js"></script>
</body>
</html>
