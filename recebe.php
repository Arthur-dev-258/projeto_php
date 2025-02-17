<?php

  $valor = $_POST['n'];
 //$cores = ['#FFCCCC', '#CCE5FF', '#CCFFCC', '#FFFFCC', '#FFCCFF'];

  $cores = ['#FFCCCC', '#CCE5FF'];

  // Inicia a tabela HTML
  echo "<table border='1'>";
  echo "<tr><th>Valor</th></tr>";

  // Loop para gerar as linhas da tabela
  for($i = 1; $i <= $valor; $i++) {
    // Seleciona uma cor da lista usando o índice do loop
    $cor = $cores[$i % count($cores)];
    echo "<tr style='background-color: $cor;'><td>$i</td></tr>";
  }

  // Fecha a tabela HTML
  echo "</table>";
?>