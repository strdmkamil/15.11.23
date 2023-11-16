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
$database = "klasa";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM 5c";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["Imie"] . "  " . $row["Nazwisko"] . "  " . $row["Data"] . "  </li>";
    }
    echo "</ul>";
} else {
    echo "Brak danych do wyświetlenia.";
}


$conn->close();
?>
</body>
</html>