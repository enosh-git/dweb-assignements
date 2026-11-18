<?php 

// Cone Types
$coneTypes = array("Chocolate cone", "Sugar cone", "Wafer Cone", "Waffle cone");
$conePrices = array(5, 3, 2, 4);
$coneInventory = array(10, 10, 10, 10);

// Toppings
$toppings = array("Chopped nuts", "Fudge", "Salted Caramel", "Sprinkles");
$toppingsPrice = array(5, 6, 4, 2);
$toppingsInventory = array(10, 10, 10 ,10);

// Ice cream flavors
$flavors = array("Vanilla", "Chocolate", "Strawberry", "Chocolate Chip");
$flavorPrice = 3;
$flavorInventory = array(10, 10, 10, 10);

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

    <!-- Table for cone type -->
     <h3>Cones</h3>
    <table>
      <tr>
        <th>Cone Type</th>
        <th>Price</th>
      </tr>

      <tr>
        <th><?= $coneTypes[0] ?></th>
        <th>$<?= $conePrices[0] ?></th>
      </tr>

      <tr>
        <th><?= $coneTypes[1] ?></th>
        <th>$<?= $conePrices[1] ?></th>
      </tr>

      <tr>
        <th><?= $coneTypes[2] ?></th>
        <th>$<?= $conePrices[2] ?></th>
      </tr>

      <tr>
        <th><?= $coneTypes[3] ?></th>
        <th>$<?= $conePrices[3] ?></th>
      </tr>
    </table>

    <!-- Table for flavors -->
     <h3>Flavors</h3>
    <table>
      <tr>
        <th>Flavor</th>
        <th>Price</th>
      </tr>

      <tr>
        <th><?= $flavors[0] ?></th>
        <th>$<?= $flavorPrice ?></th>
      </tr>

      <tr>
        <th><?= $flavors[1] ?></th>
        <th>$<?= $flavorPrice ?></th>
      </tr>

      <tr>
        <th><?= $flavors[2] ?></th>
        <th>$<?= $flavorPrice ?></th>
      </tr>

      <tr>
        <th><?= $flavors[3] ?></th>
        <th>$<?= $flavorPrice ?></th>
      </tr>
    </table>

    <!-- Table for toppings -->
     <h3>Toppings</h3>
    <table>
      <tr>
        <th>Topping</th>
        <th>Price</th>
      </tr>

      <tr>
        <th><?= $toppings[0] ?></th>
        <th>$<?= $toppingsPrice[0] ?></th>
      </tr>

      <tr>
        <th><?= $toppings[1] ?></th>
        <th>$<?= $toppingsPrice[1] ?></th>
      </tr>

      <tr>
        <th><?= $toppings[2] ?></th>
        <th>$<?= $toppingsPrice[2] ?></th>
      </tr>

      <tr>
        <th><?= $toppings[3] ?></th>
        <th>$<?= $toppingsPrice[3] ?></th>
      </tr>
    </table>
  </main>
</body>
</html>