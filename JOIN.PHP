<?php 
include('navbar.php');
?>

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
</head>
<body>
    



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT employeeid,emplyeename, address,startdate,salary,phone from employee";

echo '<table class="table" >
      <tr> 
<th>employeeid </th>
<th>emplyeename </th>
<th>address </th>
<th>startdate </th>
<th>salary </th>
<th>phone </th>

</tr>';

if ($result = $conn->query($sql)){


    while ($row= $result ->fetch_assoc()){
        echo "<tr>
        <td>" .($row['employeeid'])."</td>
         <td>" .($row['emplyeename'])."</td>
         <td>" .($row['address'])."</td>
        <td>" .($row['startdate'])."</td>
         <td>" .($row['salary'])."</td>
        <td>" .($row['phone'])."</td>
        


</tr>";
}
    
echo "</table>";
}
?>
<br>
<br>
<?php 
include('footer.php');
?>
</body>
</html>













