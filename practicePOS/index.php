<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice POS</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>

  <hr>
  <form action="index.php" method="post">
    <!-- BOOK : <input type="text" name="book"> <br> -->
    <h1>PURCHASE</h1>
    <h3>Fill the details down below</h3>
    Item Name : <input type="text" name="purchase-name"> <br>
    Quantity : <input type="text" name="purchase-quantity"> <br>
    Money : <input type="text" name="purchase-money"> <br>
    <input type="submit">
  </form>
  <hr>

  <table>
    <tbody>
    <tr>
      <th>name</th>
      <th>quantity</th>
      <th>money</th>
      <th>change</th>
      <th>total transac amount</th>
    </tr>
    </tbody>

    <?php

      echo "Php index file is operational.";
      require './item.php';
      require './store.php';

      $store = new Store();
      $transactionElements = "";

      $name = $_POST["purchase-name"];
      $quantity = $_POST["purchase-quantity"];
      $money = $_POST["purchase-money"];


      $purchaseResults = $store->purchase(
        $name,
        $quantity,
        $money
      );

    echo $purchaseResults["htmlElem"];
    ?>

  </table>
  <!-- reference for generating content
  <hr>
  <form action="index.php" method="post">
    Product name : <input type="text" name="book"> <br>
    Money : <input type="text" name="book"> <br>
    Quantity : <input type="text" name="book"> <br>
    <input type="submit">
  </form>
  <hr> -->
</body>

</html>