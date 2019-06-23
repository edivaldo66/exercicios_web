<?php
$link = mysqli_connect("localhost", "root", "", "exercicios");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
  // echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
  // echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
  // mysqli_close($link);
?>

<link rel="stylesheet" type="text/css" href="./css/bootstrap_css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

<div class="form-group">
  <div class="col-md-2"><label for="valores">Digite seus nomes e dependentes</label>

    <p><input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" name="pessoa"></p>
    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" name="dependente">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</div>


<?php


  $nome = $_POST["pessoa"];
  $dependente = $_POST["dependente"];

  $sql = "INSERT INTO pessoas (nome, dependentes) VALUES ('$nome', '$dependente')";

  $sql = "SELECT * FROM pessoas";
  $query = mysqli_query($link, $sql);

  echo "<table>";
  while($row = mysqli_fetch_assoc($query)){
?>


  <tr>
    <td>
      <?= $row["id"] ?>
    </td>
    <td>
      <?= $row["nome"] ?>
    </td>
    <td>      
      <?= $row["dependentes"] ?>
    </td>
  </tr>

<?php 
}
echo "</table>";
?>

