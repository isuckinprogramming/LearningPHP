<?php

class Store
{

  // public Item $book = new Item("book", 10, 100);
  // public Item $pen = new Item("pen", 100, 10);
  // public Item $pencil = new Item("pencil", 100, 5);
  // public Item $eraser = new Item("eraser", 100, 15);

  public function __construct()
  {

    // $book = new Item("book", 10, 100);
    // $pen = new Item("pen", 100, 10);
    // $pencil = new Item("pencil", 100, 5);
    // $eraser = new Item("eraser", 100, 15);

  }

  // public function purchase(
  //   Item $item,
  //   // string $itemName,
  //   int $quantity,
  //   int $money
  // ): array {

  public function purchase(
    Item $item,
    // string $itemName,
    $quantity,
    $money
  ): array {
    // $result = [];
    // switch ($itemName) {
    //   case "book":
    //     $result = $this->book->buy($quantity, $money);
    //     break;

    //   case "pen":
    //     $result = $this->pen->buy($quantity, $money);
    //     break;

    //   case "pencil":
    //     $result = $this->pencil->buy($quantity, $money);
    //     break;

    //   case "eraser":
    //     $result = $this->eraser->buy($quantity, $money);
    //     break;
    //   default:
    //   // terminate function and return error
    // }

    $result = $item->buy($quantity, $money);
    $result["itemName"] = $item->name;

    return $result;
  }




  // public function get_item_display_string($item): string
  // {
  //   $displayString = "<hr>
  //   <form action=\"index.php\" method=\"post\">
  //     <input type=\"text\" name=\"$item->name\"><br>
  //     <input type=\"text\" name=\"$item->name\"><br>
  //     <input type=\"text\" name=\"$item->name\"><br>
  //     <input type=\"submit\">
  //   </form>
  //   <hr>";

  //   return $displayString;
  // }

}

// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//   // Retrieve the input data from the POST request
//   // $inputData = $_POST["inputData"];
//   $date = $_POST["book-prodName"];
//   echo $data[0];

//   // Process the input data (for demonstration, echoing it)
//   // echo "Input Data: " . htmlspecialchars($inputData);
// } else {
//   // If the script is accessed directly without a POST request, redirect to the form page
//   // header("Location: index.html");
//   // exit();
// }