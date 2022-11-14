<!DOCTYPE html>
<head>
  <title>EECS 448: Lab 6 Storefront</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id = "receipt">
    <?php
      $usrname = $_POST["usrname"];
      $pssword = $_POST["pssword"];
      $blbs = $_POST["blb"];
      $psi_caramels = $_POST["psi_caramel"];
      $fly_quant = $_POST["honey"];
      $fly_honeys = $_POST["honey"];
      $shipping = $_POST["shipping"];

      //Calculations
      $blb_total = $blbs * 3080;
      $psi_total = $psi_caramels * 40;
      $fly_total = $fly_quant * 2;
      $shipping_total = 0;
      if ($shipping == "Overnight") {
        $shipping_total = 50;
      } else if ($shipping == "Three Day") {
        $shipping_total = 5;
      }
      $total = $blb_total + $psi_total + $fly_total + $shipping_total;

      echo "<h1>Receipt</h1>";
      echo "Hello $usrname with password $pssword!<br>";
      echo "<table>";

      //Row 1
      echo "<tr>";
      echo "<th> </th>";
      echo "<th>Quantity</th>";
      echo "<th>Cost Per Item</th>";
      echo "<th>Sub Total</th>";
      echo "</tr>";

      //Row 2
      echo "<tr>";
      echo "<th>Big League Bat(s)</th>";
      echo "<td>$blbs</td>";
      echo "<td>$3080.00</td>";
      echo "<td>$blb_total</td>";
      echo "</tr>";

      //Row 3
      echo "<tr>";
      echo "<th>PSI_Caramel(s)</th>";
      echo "<td>$psi_caramels</td>";
      echo "<td>$40.00</td>";
      echo "<td>$psi_total</td>";
      echo "</tr>";

      //Row 4
      echo "<tr>";
      echo "<th>Jar(s) of Fly Honey</th>";
      echo "<td>$fly_quant</td>";
      echo "<td>$2.00</td>";
      echo "<td>$fly_total</td>";
      echo "</tr>";

      //Row 5
      echo "<tr>";
      echo "<th>Shipping</th>";
      echo "<td colspan='2'>$shipping</td>";
      echo "<td>$shipping_total</td>";
      echo "</tr>";

      //Row 6
      echo "<tr>";
      echo "<th colspan='3'>Total Cost</th>";
      echo "<th>$total</th>";
      echo "</tr>";

      echo "</table>";

     ?>
  </div>
</body>
