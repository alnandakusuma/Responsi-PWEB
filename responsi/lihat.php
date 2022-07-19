<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Purchase History</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="style1">

      <div class="style2">
        <h2 class="style3">Order</h2>
        <h4 class="style4">Queue</h4>
        <a class="style5" href="./index.html" role="button">Back To Home</a>
      </div>
    </div>
</div>
</body>
</html>

<?php
echo "<center>";
$fp = fopen("struk.txt", "r");
echo "<table style-table>";
echo "<tr>
    <th>No</th>
    <th>Date</th>
    <th>Name</th>
    <th>Email</th>
    <th>Adress</th>
    <th>Pizza</th>
    <th>Burger</th>
    <th>Chicken</th>
    <th>French Fries</th>
    <th>Spaghetti</th>
    <th>Sushi</th>
    <th>Hotdog</th>
    <th>Mie</th>
    <th>Ice Cream</th>
    <th>Donut</th>
    <th>Nugget</th>
    <th>Bacon</th>
    <th>Total</th>
    <th>Message</th>
</tr>";

$number=1;
while ($isi = fgets($fp, 2000)) {
    $pisah = explode("|", $isi);
    echo "<tr>";
    echo "<td>&nbsp;$number&nbsp;</td>";
    for ($i=0; $i < 18; $i++) { 
      echo "<td>&nbsp;&nbsp;$pisah[$i]&nbsp;&nbsp;</td>";
    }
    echo "</tr>";
  $number=$number+1;
}
echo "</table>";
echo "</center>";
?>