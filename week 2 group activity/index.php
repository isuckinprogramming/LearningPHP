<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Output activity</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        require("database.php");

        echo "<br>something";
        $sqlQuery = "SELECT * FROM user_table";
        $query = $connection->query($sqlQuery);
        $number = $query->num_rows;

        $alllTableContents = "";

        while($row = $query->fetch_assoc()){

            $id = $row["id"];
            $username = $row["username"];
            $password = $row["password"];
            $name = $row["name"];

            $displayIndividual = "
            <br><hr>
            <p>$id</p>
            <p>$username</p>
            <p>$password</p>
            <p>$name</p>
            <br><hr>"; 
            echo $displayIndividual;
            $tableRow = "
            <tr>
                <td>$id</td>
                <td>$username</td>
                <td>$password</td>
                <td>$name</td>
            </tr>";

            $alllTableContents = $alllTableContents . $tableRow;
        }
  
        $tableElement = 
        "<table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>name</th>
            </tr>
            $alllTableContents
        </table>";
        
        echo " Number of rows $number <br>  $tableElement";
    ?>
</body>
</html>
