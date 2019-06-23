<link rel="stylesheet" type="text/css" href="css/estilo.css">

<div class="form-group">
	<div class="col-md-2"><label for="valores">Valores</label>
	    <input type="text" class="form-control" id="valor_1" name="valor1" placeholder="Informe o valor 1" value="<?= $valor_1 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor2" placeholder="Informe o valor 2" value="<?= $valor_2 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor3" placeholder="Informe o valor 3" value="<?= $valor_3 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor4" placeholder="Informe o valor 4" value="<?= $valor_4 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor5" placeholder="Informe o valor 5" value="<?= $valor_5 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor6" placeholder="Informe o valor 6" value="<?= $valor_6 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor7" placeholder="Informe o valor 7" value="<?= $valor_7 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor8" placeholder="Informe o valor 8" value="<?= $valor_8 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor9" placeholder="Informe o valor 9" value="<?= $valor_9 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor10" placeholder="Informe o valor 10" value="<?= $valor_10 ?>"><br>
	    <a type="submit" class="btn btn-primary">Calcular</a>
	</div>
</div>

<?php

	$valores = array($_GET["valor1"], $_GET["valor2"], $_GET["valor3"], $_GET["valor4"], $_GET["valor5"], $_GET["valor6"], $_GET["valor7"], $_GET["valor8"], $_GET["valor9"], $_GET["valor10"]););
	$media = NULL;

	foreach ($valores as $valor) {
		$media = $media + $valor;
	}

	$media = $media/10;

	if ($media >=60) {
		echo '<div class="alert alert-success" role="alert">
  				Aprovado
			</div>';
	}else{
		echo '<div class="alert alert-danger" role="alert">
  				Reprovado
			</div>';
	}

?>