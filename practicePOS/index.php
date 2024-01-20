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
  <form action="index.php" method="get">
    <!-- BOOK : <input type="text" name="book"> <br> -->
    <h1>BOOK</h1>
    Quantity : <input type="text" name="book-quantity"> <br>
    Money : <input type="text" name="book-money"> <br>
    <input type="submit">
  </form>
  <hr>
  <hr>
  <form action="index.php" method="post">
    <!-- PEN: <input type="text" name="pen"> <br> -->
    <h1>PEN</h1>
    Quantity : <input type="text" name="pen-quantity"> <br>
    Money : <input type="text" name="pen-money"> <br>
    <input type="submit">
  </form>
  <hr>
  <hr>
  <form action="index.php" method="post">
    <!-- PENCIL : <input type="text" name="pencil"> <br> -->
    <h1>PENCIL</h1>
    Quantity : <input type="text" name="pencil-quantity"> <br>
    Money : <input type="text" name="pencil-money"> <br>
    <input type="submit">
  </form>
  <hr>
  <hr>
  <form action="index.php" method="post">
    <!-- ERASER : <input type="text" name="eraser"> <br> -->
    <h1>ERASER</h1>
    Quantity : <input type="text" name="eraser-quantity"> <br>
    Money : <input type="text" name="eraser-money"> <br>
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
    require './item.php';
    require './store.php';

    $store = new Store();
    $totalTransac = 0;
    $transactionElements = "";
    $pointer = 0;

    $bookMoney = $_GET["book-money"];
    $bookQuantity = $_GET["book-quantity"];
    $book = new Item("book", 10, 100);
    $bookPurchase = $store->purchase($book, $bookQuantity, $bookMoney);

    $penMoney = $_GET["pen-money"];
    $penQuantity = $_GET["pen-quantity"];
    $pen = new Item("pen", 10, 100);
    $penPurchase = $store->purchase($pen, $penQuantity, $penMoney);

    $pencilMoney = $_GET["pencil-money"];
    $pencilQuantity = $_GET["pencil-quantity"];
    $pencil = new Item("pencil", 10, 100);
    $pencilPurchase = $store->purchase($pencil, $pencilQuantity, $pencilMoney);

    $eraserMoney = $_GET["eraser-money"]; 
    $eraserQuantity = $_GET["eraser-quantity"];
    $eraser = new Item("eraser", 10, 100);
    $eraserPurchase = $store->purchase($eraser, $eraserQuantity, $eraserMoney);

    function get_html_elem(
      $name,
      $money,
      $change,
      $quantity,
      $profit
    ) {
      global $totalTransac;
      $totalTransac = $totalTransac + $profit;


      $htmlElementOutput =
        "<tbody><tr>
          <td>$name</td>
          <td>$quantity</td>
          <td>$money</td>
          <td>$change</td>
          <td>$totalTransac</td>
        </tr>
        </tbody>";

      global $transactionElements;
      global $pointer;
      $transactionElements .= $htmlElementOutput;
      
      echo $transactionElements; 
      
      // $pointer++;
    }

    if( isset($_GET["book-money"]) && isset($_GET["book-quantity"]) ){
        get_html_elem(
        $bookPurchase["itemName"],
        $bookPurchase["money"],
        $bookPurchase["change"],
        $bookPurchase["amount"],
        $bookPurchase["profit"]
      );
    }
    
    if( isset($_GET["pen-money"]) && isset($_GET["pen-quantity"]) ){
      get_html_elem(
        $penPurchase["itemName"],
        $penPurchase["money"],
        $penPurchase["change"],
        $penPurchase["amount"],
        $penPurchase["profit"]
      );
    }
    if( isset($_GET["pencil-money"]) && isset($_GET["pencil-quantity"]) ){
      get_html_elem(
        $pencilPurchase["itemName"],
        $pencilPurchase["money"],
        $pencilPurchase["change"],
        $pencilPurchase["amount"],
        $pencilPurchase["profit"]
      );
    }

    if( isset($_GET["eraser-money"]) && isset($_GET["eraser-quantity"]) ){
      get_html_elem(
        $erasersPurchase["itemName"],
        $erasersPurchase["money"],
        $erasersPurchase["change"],
        $erasersPurchase["amount"],
        $erasersPurchase["profit"]
      );
    }
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