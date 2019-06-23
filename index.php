<?php
require_once("config/conexao_bd.php");
?>

<!DOCTYPE html>
<html>
	<head>

		<title>OAT - Exercícios de PHP, CSS e HTML</title>
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="./css/bootstrap_css/bootstrap.min.css">

		<script src="./js/jquery-3.3.1.slim.min.js"></script>
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap_js/bootstrap.min.js" ></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script type="text/javascript" src="js/funcoes.js"></script>

	</head>
	<body>
		<div class="container" id="cabecalho">
			<div class="jumbotron">
				<div  class="col-md-6" id="buttons">
					<ul class="menu">
							<ul><a class="btn btn-primary"  role="button" href="?pg=atividade_1">1) Calcular o maior e o menor valor dentre 5</a></ul><br>
							<ul><a class="btn btn-primary" role="button" href="?pg=atividade_2">2) Calcular a média de 10 valores</a></ul><br>
							<ul><a class="btn btn-primary" role="button" href="?pg=atividade_3">3) Tabuada do 2</a></ul><br>
							<ul><a class="btn btn-primary" role="button" href="?pg=atividade_4">4) Tabuada do 3</a></ul><br>
							<ul><a class="btn btn-primary" role="button" href="?pg=atividade_5">5) Maior idade dentre 5 pessoas</a></ul><br>
							<ul><a class="btn btn-primary" role="button" href="?pg=atividade_6">6) Cadastrar pessoas e seus dependentes</a></ul>
					</ul>
				</div>
			</div>
		</div>

		</div>

			<div class="container" id="corpo">
				<?php
					if(isset($_GET["pg"])){
							$atividade = $_GET["pg"];
					}
					else{
							$atividade = "atividade_1";
					}				
					include("atividades/".$atividade.".php");
				?>
			</div>
		</div>

		<div class="container" id="rodape">

			<div class="jumbotron">				

				<p10>Edivaldo F. M. Júnior - 2019/1</p10>			

			</div>
		</div>
	</body>
</html>