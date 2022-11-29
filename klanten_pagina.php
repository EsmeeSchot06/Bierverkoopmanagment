<!DOCTYPE html>
<html lang="nl">
    <head>
        <style>
        </style>
    </head>
    <body>
        <p>test</p>
        <?php 
        
           // Create connection
           $conn = mysqli_connect($servername, $username, $password, $dbname);
           // Check connection
           if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
           }

           $sql = "SELECT * FROM inloggen"
           $result = mysqli_query($conn, $sql);

           if (mysqli_num_rows($result) > 0){
            // output data of each row 
           }

           ?> 
    </body>
</html>