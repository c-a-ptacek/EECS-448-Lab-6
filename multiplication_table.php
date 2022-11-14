<!DOCTYPE html>
<head>
  <title>EECS 448 Multiplication Table</title>
  <link rel="stylesheet" href="table.css">
</head>

<body>
  <h1>Multiplication Table</h1>
  <?php
    echo "<table>";
    for ($x = 0; $x <=100; $x++) {
      echo "<tr>";
      if ($x == 0) {
        echo "<th> </th>";
      } else {
        echo "<th>$x</th>";
      }
      for ($y = 1; $y <= 100; $y++) {
        if ($x == 0) {
          echo "<th>$y</th>";
        } else {
          $z = $y * $x;
          echo "<td>$z</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
   ?>
