<!DOCTYPE html>
<html lang="nl">
    <head>
        <style>
        </style>
    </head>
    <body>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Bestellen.db";
        ?>
        <?php 
    
        
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo  " - Naam: " . $row["Naam"]. " -Telefoonnummer: " . $row["Telefoonnummer"]. " - Email:  " . $row["Email"].  " - Postcode: " . $row["Postcode"]. " - Huisnummer: " . $row["Huisnummer"]. "<br>";
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);

           ?> 
    </body>
</html>