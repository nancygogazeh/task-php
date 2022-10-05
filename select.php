<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
    border: 1px solid black;
}
</style>

</head>
<body>
    



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT id, title, content FROM articles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>id</th><th>title</th><th>content</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["title"]."</td><td>" . $row["content"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>