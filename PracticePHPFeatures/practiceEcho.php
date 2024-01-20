<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice Echo</title>
  <link rel="stylesheet" href="./style.css">
</head>
  <body>
    
  <!-- 
    emmet command to create table with header and dummy content
    table>(tr>th{$}*3)^(tr>td{$}*3)*3   -->
  
  <!-- Won't show a table in locally hosted server -->

    <table>
      <tr>
        <th>1</th>
        <th>2</th>
        <th>3</th>
      </tr>
    </table>
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tr>
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tr>
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
    </tr>

  <?php
    // NOTE: Fuck the semi-colons hahahahahahahahha

    // Will not work, not like javascript
    // $jsonObj = {test:"value"}
    $nameValuePairContainer = "something";
    
    $tableElement = 
      "<table>
        <tr>
          <th>1</th>
          <th>2</th>
          <th>3</th>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
      </table>";

  $headerElement = "<h1>some words here: This is a header 1</h1>";

    // Won't show the table
    echo($tableElement,$headerElement);
    echo($nameValuePairContainer);

    // echo("something");
    // echo( $jsonObj.next)
  ?>
</body>
</html>