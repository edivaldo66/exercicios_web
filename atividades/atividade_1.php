<link rel="stylesheet" type="text/css" href="css/estilo.css">

<div class="form-group">
	<div class="col-md-2">

		
	    <label for="valores">Valores</label>
	    <input type="text" class="form-control" id="valor_1" name="valor1" placeholder="Informe o valor 1" value="<?= $valor_1 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor2" placeholder="Informe o valor 2" value="<?= $valor_2 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor3" placeholder="Informe o valor 3" value="<?= $valor_3 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor4" placeholder="Informe o valor 4" value="<?= $valor_4 ?>"><br>
	    <input type="text" class="form-control" id="valor_1" name="valor5" placeholder="Informe o valor 5" value="<?= $valor_5 ?>"><br>
	    <a type="submit" class="btn btn-primary">Calcular</a>


		<?php


			$valores = array($_GET["valor1"], $_GET["valor2"], $_GET["valor3"], $_GET["valor4"], $_GET["valor5"]);

			$menor = NULL;
			$maior = NULL;

			foreach ($valores as $valor) {
				
				if ($valor < $menor || $menor === NULL) {
					$menor = $valor;
				}

				if ($valor > $maior || $maior === NULL) {
					$maior = $valor;
				}
			}

			echo "<div class='alert alert-success' role="alert"> O maior valor é: " . $maior . "</div>";
			echo "<br>";
			echo "<div class='alert alert-success' role="alert"> O menor valor é: " . $menor . "</div>";
		?>

	</div>
</div>

