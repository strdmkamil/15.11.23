<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "PracowaniaAplikacjiWebowych";

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn === TRUE) {
        echo "Connected successfuly";
    } 

    $conn->close();
?>
</body>
</html>
