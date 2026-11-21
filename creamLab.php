<?php 
declare(strict_types=1);

$products = [
  // cone types
  "Chocolate Cone" => ["price" => 30, "stock" => 10],
  "Waffle Cone" => ["price" => 30, "stock" => 10],

  //toppings
  "Chopped Nuts" => ["price" => 15, "stock" => 10],
  "Fudge" => ["price" => 15, "stock" => 5],

  // Ice cream flavors
  "Chocolate" => ["price" => 30, "stock" => 10],
  "Vanilla" => ["price" => 30, "stock" => 8],
];

$tax_rate = 12;

function get_reorder_message(int $stock):string {
  return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity):float {
  return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0):float {
  return ($price * $quantity) * ($tax_rate / 100);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Ice Cream Shop</title>
</head>
<body>
  <header>
    <h1>The Cream Lab</h1>
    <h2>Ice Cream Shop</h2>
  </header>

  <main>
    <h3>Stock Control</h3>
    <table>
      <tr>
        <th>Product</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total Value</th>
        <th>Tax Due</th>
      </tr>
  
      <?php foreach ($products as $product_name => $data) {?>
        <tr>
          <td><?= $product_name ?></td>
          <td><?= $data["stock"] ?></td>
          <td><?= get_reorder_message($data["stock"])?></td>
          <td>₱<?= number_format(get_total_value($data["price"], $data["stock"]), 2) ?></td>
          <td>₱<?= number_format(get_tax_due($data["price"], $data["stock"], $tax_rate), 2) ?></td>
        </tr>
      <?php }?>
    </table>
  </main>
</body>
</html>