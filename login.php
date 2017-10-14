<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Painel Administrativo</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

</head>
<body>
	<div class="middlePage">
		<div class="page-header">
			<h1 class="logo">PERFIL PLAST <small>painel de controle</small></h1>
		</div>

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Faça seu login</h3>
			</div>
			<div class="panel-body">

				<div class="row">

					<div class="col-md-5" >

						<div class="col-md-12" style="background: #3b5998; height: 50px; border-bottom: 1px solid #fff; color: #fff; padding-top: 15px;">
							<i class="fa fa-facebook fa-lg" aria-hidden="true" style="margin-right: 20px;"></i><div style="float:right;">Curta-nos no facebook</div>
						</div>
						<div class="col-md-12" style="background: #2aa9e0; height: 50px; border-bottom: 1px solid #fff; color: #fff; padding-top: 15px;">
							<i class="fa fa-twitter fa-lg" aria-hidden="true" style="margin-right: 20px;"></i> <div style="float:right;">Siga-nos no twitter</div>
						</div>
						<div class="col-md-12" style="background: #8451c3; height: 50px; border-bottom: 1px solid #fff; color: #fff; padding-top: 15px;">
							<i class="fa fa-instagram fa-lg" aria-hidden="true" style="margin-right: 20px;"></i><div style="float:right;"> Siga-nos no instagram</div>
						</div>
<!-- <a href="#"><img src="http://techulus.com/buttons/fb.png" /></a><br/>
<a href="#"><img src="http://techulus.com/buttons/tw.png" /></a><br/>
<a href="#"><img src="http://techulus.com/buttons/gplus.png" /></a> -->
</div>

<div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
	<form class="form-horizontal" action="auth.php" method="POST">
		<fieldset>

			<div class="spacing"><input id="textinput" name="email" type="text" placeholder="Digite seu login" class="form-control input-md"></div>
			<input id="textinput" name="senha" type="text" placeholder="Digite sua senha" class="form-control input-md">
			<div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Lembrar</small></div>
			<a href="#"><small> Esqueceu a senha?</small></a>
			<button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Entrar</button>


		</fieldset>
	</form>
</div>

</div>

</div>
</div>

<p>desenvolvido pela Hagile</p> 

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
<script src="js/bootstrap.min.js"></script>
</body>
</html>