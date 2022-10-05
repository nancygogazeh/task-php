
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



$sql = "INSERT INTO articles (id, title, content)
VALUES ('', 'UK', 'STORY');";
$sql .= "INSERT INTO articles (id, title, content)
VALUES ('', 'SAUDI', 'STORY');";
$sql .= "INSERT INTO articles (id, title, content)
VALUES ('' 'US', 'STORY');";
$sql .= "INSERT INTO articles (id, title, content)
VALUES ('' 'OMAN', 'ADVENTURE');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>