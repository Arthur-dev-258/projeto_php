<?php

  $valor = $_POST['n'];


  $cores = ['#FFCCCC', '#CCE5FF'];

 
  echo "<table border='1'>";
  echo "<tr><th>Valor</th></tr>";

 
  for($i = 1; $i <= $valor; $i++) {
   
    $cor = $cores[$i % count($cores)];
    echo "<tr style='background-color: $cor;'><td>$i</td></tr>";
  }

  echo "</table>";
?>
