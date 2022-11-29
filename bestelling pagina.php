<!DOCTYPE html>
 <html lang="nl">
<head>
    <title>Bestellingen</title>
    <style>
        .bestal {
            margin-left: 43%

        }
    </style>
</head>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bestellen.db";

?>

<body>
    <div class="bestal">
        <h1>Bestellingen<h1>
        <?php
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
 
            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
            echo "bier flesjes: " . $row["Bierflesje"]. " - Kosten: " . $row["Kosten"]. " - Verzendkosten: " . $row["Verzendkosten"]. " "  ."<br>";
            }
            } else {
            echo "0 results";
            }
        
            mysqli_close($conn); 
        ?>
    </div>
   