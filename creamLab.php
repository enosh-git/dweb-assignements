<?php 

// Cone Types
$coneTypes = array("Chocolate cone", "Sugar cone", "Wafer Cone", "Waffle cone");
$conePrices = array(5, 3, 2, 4);
$coneInventory = array(0, 10, 10, 10);

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

      <?php for ($i = 0; $i < count($coneTypes); $i++) { ?>
        <tr>
          <th> <?= $coneTypes[$i] ?></th>
          <th>
          <?php if ($coneInventory[$i] != 0) {
            echo "$" . $conePrices[$i];
          } else {
            echo "Not available";
          } ?>
          </th>
        </tr>
      <?php } ?>
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
        <th><?php 
        if ($flavorInventory[0] != 0) {
          echo "$" . $flavorPrice;
        } else {
          echo "Not available";
        } 
        ?></th>
      </tr>

      <tr>
        <th><?= $flavors[1] ?></th>
        <th><?php 
        if ($flavorInventory[1] != 0) {
          echo "$" . $flavorPrice;
        } else {
          echo "Not available";
        } 
        ?></th>
      </tr>

      <tr>
        <th><?= $flavors[2] ?></th>
        <th><?php 
        if ($flavorInventory[2] != 0) {
          echo "$" . $flavorPrice;
        } else {
          echo "Not available";
        } 
        ?></th>
      </tr>

      <tr>
        <th><?= $flavors[3] ?></th>
        <th><?php 
        if ($flavorInventory[3] != 0) {
          echo "$" . $flavorPrice;
        } else {
          echo "Not available";
        } 
        ?></th>
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
        <th><?php 
        if ($toppingsInventory[0] != 0) {
          echo "$" . $toppingsPrice[0];
        } else {
          echo "Not available";
        } 
        ?></th>
      </tr>

      <tr>
        <th><?= $toppings[1] ?></th>
        <th><?php 
        if ($toppingsInventory[1] != 0) {
          echo "$" . $toppingsPrice[1];
        } else {
          echo "Not available";
        } 
        ?></th>
      </tr>

      <tr>
        <th><?= $toppings[2] ?></th>
        <th><?php 
        if ($toppingsInventory[2] != 0) {
          echo "$" . $toppingsPrice[2];
        } else {
          echo "Not available";
        } 
        ?></th>
      </tr>

      <tr>
        <th><?= $toppings[3] ?></th>
        <th><?php 
        if ($toppingsInventory[3] != 0) {
          echo "$" . $toppingsPrice[3];
        } else {
          echo "Not available";
        } 
        ?></th>
      </tr>
    </table>
  </main>
</body>
</html>