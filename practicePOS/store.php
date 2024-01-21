<?php
class Store
{

  public function __construct()
  {
    $this->book = new Item("book", 10, 100);
    $this->pen = new Item("pen", 10, 100);
    $this->pencil = new Item("pencil", 10, 100);
    $this->eraser = new Item("eraser", 10, 100);
    $this->total_transac = 0;
  }

  public function purchase(
    string $itemName,
    $quantity,
    $money
  ): array {
  
    $result = ["isTransacValid" => false];
    
    switch ($itemName) {
      case "book":
        $result = $this->book->buy($quantity, $money);
        break;

      case "pen":
        $result = $this->pen->buy($quantity, $money);
        break;

      case "pencil":
        $result = $this->pencil->buy($quantity, $money);
        break;

      case "eraser":
        $result = $this->eraser->buy($quantity, $money);
        break;
      default:
        // passed name value is not an item so terminate function 
      return $result;
    }

    $result["isTransacValid"] = true;
    $result["itemName"] = $itemName;
    $result["htmlElem"] = $this->get_html_elem(
      $result["itemName"],
      $result["money"],
      $result["change"],
      $result["profit"],
      $this->total_transac
    );
    return $result;
  }

  function get_html_elem(
      $name,
      $money,
      $change,
      $quantity,
      $profit,
      $transacVal
  ) {
    $this->total_transac = $this->total_transac + $profit;
    
    return
    "<tbody>
        <tr>
          <td>$name</td>
          <td>$quantity</td>
          <td>$money</td>
          <td>$change</td>
          <td>$transacVal</td>
        </tr>
      </tbody>";
  }
}
