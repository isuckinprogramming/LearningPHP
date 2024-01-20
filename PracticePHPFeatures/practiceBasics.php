<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice Basics</title>
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

  <!-- p{Practice Form}+form[action="practiceBasics.php" method="get"]>input[type="text" name="receiveForm"]+input[type="submit"] -->
  <p>Practice Form</p>
  <form action="practiceBasics.php" method="get">
    <input type="text" name="receiveForm"> <br>
    <input type="text" name="valueReceiver"> <br>
    <input type="submit">
  </form>

  <!-- p{Practice CheckBox Forms}+form[action="practiceBasics.php" method="get"]>input[type="checkbox" name="box1" value="Box 1 true"]+input[type="checkbox" name="box2" value="Box 2 true"] -->
  <p>Practice CheckBox Forms</p>
  <form action="practiceBasics.php" method="post">
    Box 1 : <input type="checkbox" name="boxValues[]" value="Box 1 true"> <br>
    Box 2 : <input type="checkbox" name="boxValues[]" value="Box 2 true"> <br>
    Box 3 : <input type="checkbox" name="boxValues[]" value="Box 3 true"> <br>
    <!-- input[type="submit"] -->
    <input type="submit">
  </form>


  <?php
  // NOTE: Fuck the semi-colons hahahahahahahahha
  // Will not work, not like javascript
  // $jsonObj = {test:"value"}
  $nameValuePairContainer = [
    // will not work because of undefined constant
    // prop => "test <br>",
    "String" => "this works with string as a key <br>",
    // "String" => "I want to see if this works even if it's a duplicate",
    0 => "Okay, number works to <br>"
  ];

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
  echo ($headerElement);

  // This won't work
  // echo($nameValuePairContainer);
  
  foreach ($nameValuePairContainer as $key => $valuePair) {
    echo (" $key : $valuePair <br> ");
  }
  // echo("something");
  // echo( $jsonObj.next)
  
  // Going to Pass this as a string through the form 
  // <script>
  //   window.alert(
  //    "Successfully accessed window object. 
  //    Honestly don't know what to do with this."
  //   )
  // </script>
  
  echo $_GET['receiveForm'];
  echo ($_GET['receiveForm']);

  $varFromInput = $_GET['valueReceiver'];
  echo (" <br>The value is :$varFromInput <br>The value should be updated ");

  $boxValues = $_POST['boxValues'];
  // echo ("$boxValues[0] + $boxValues[1]");
  
  // illegal shit
  // echo $boxValues;
  
  ?>

</body>

</html>