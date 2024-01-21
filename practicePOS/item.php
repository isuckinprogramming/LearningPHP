<?php

class Item
{

  public function __construct(
    string $passName = "no name set",
    int $pricePass = 1,
    int $quantityPass = 1
  ) {
    $this->name = $passName;
    $this->price = $pricePass;
    $this->quantity = $quantityPass;
  }

  /**
   * 
   * @return [
  * isMoneyValid=>bool,
   * isQuantityValid=>bool,
   * change=>int:(default -1),
   * profit=>int:(default -1)]
   * }
   */
  public function buy(
    $quantityPurchase = 1,
    $moneyPurchase = -1,
  ): array {
    $result = [
      "isMoneyValid" => false,
      "isQuantityValid" => false,
      "change" => -1,
      "profit" => -1
    ];

    // Place validity checks first before process code  
    if ($quantityPurchase <= 0 && $moneyPurchase <= 0) {
      return $result;
    } elseif ($quantityPurchase <= 0) {
      $result["isQuantityValid"] = false;
      $result["isMoneyValid"] = true;
      return $result;
    } elseif ($moneyPurchase <= 0) {
      $result["isQuantityValid"] = true;
      $result["isMoneyValid"] = false;
      return $result;
    }

    $cost = $quantityPurchase * $this->price;
    $isThereEnoughPcs = $this->quantity >= $quantityPurchase;

    if ($moneyPurchase < $cost && !$isThereEnoughPcs) {
      return $result;

    } elseif (!$isThereEnoughPcs) {
      $result["isQuantityValid"] = false;
      $result["isMoneyValid"] = true;

      return $result;

    } elseif ($cost > $moneyPurchase) {
      $result["isQuantityValid"] = true;
      $result["isMoneyValid"] = false;

      return $result;
    }

    // Transcation process
    $this->quantity = $this->quantity - $quantityPurchase;

    $result["isQuantityValid"] = true;
    $result["isMoneyValid"] = true;
    $result["change"] = $moneyPurchase - $cost;
    $result["profit"] = $cost;
    $result["money"] = $moneyPurchase;
    $result["amount"] = $quantityPurchase;

    return $result;
  }


  function testItem()
  {
    $item1 = new Item("Pen", 23, 10);


    $purchaseResult = $item1->buy(3, 100);
    $change = $purchaseResult["change"];
    $profit = $purchaseResult["profit"];

    echo " change is $change , the Store gained $profit ";

  }
}
