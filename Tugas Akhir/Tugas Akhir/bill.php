<?php
// Connect to the database
$db = mysqli_connect("localhost", "irfaahmadr28", "Mancity1894", "KOPI");

// Retrieve the order data from the database
$query = "SELECT m.name, o.quantity, m.price
          FROM `menu` o
          INNER JOIN order m ON o.name = m.id";
$result = mysqli_query($db, $query);
$order = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Calculate the total price
$total_price = 0;
foreach ($order as $order) {
  $total_price += $order['quantity'] * $order['price'];
}

echo "Bill:<br>";
echo "<table>";
echo "<tr><th>Menu</th><th>Quantity</th><th>Price</th></tr>";
foreach ($orders as $order) {
  echo "<tr>";
  echo "<td>" . htmlspecialchars($order['name']) . "</td>";
  echo "<td>" . htmlspecialchars($order['quantity']) . "</td>";
  echo "<td>" . htmlspecialchars($order['harga']) . "</td>";
  echo "</tr>";
}
echo "</table>";
echo "Total price: $total_price";
?>
