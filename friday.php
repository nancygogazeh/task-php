<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="fr.php" method="GET">
Name: <input type="text" name="username">
Password:<input type="password" name ="password">
<input type="submit" value ="login"></form>

</body>
</html>


<?php

echo "hello every one";

$name ='osama';
$age=15;
function test(){

echo $GLOBALS['name'];
echo $GLOBALS['age'];
 
// echo $name;
}

test();




?>

