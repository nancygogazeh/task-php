

<html lang="en">
<head>
    <title>HTML Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h1>HTML Form</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  

        Email: <input type="text" name="email" placeholder="enter your email"><br/><br/>
        Password: <input type="password" name="password" placeholder="enter your password"><br><br/>
        <br/>
        <input type="submit" value="submit" >
 


    
 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];
  if (empty($email) && empty ($password)) {
    echo "You must fill this fields";
  } else {
    echo "<br>  <br> ";
    echo " Your email is :". $email . "<br>";
    echo "Your password is : " .$password;
  }

  }

echo " <br>";

echo " -----------------------------------------------------------------------------------";



?>



   <h1>SEARCH ENGINE</h1>
   <p> Question two</p>

   <form action="search.php" method="POST">
    <div class="box">
        <input type="text" name=" search" placeholder=" Insert URL">
        <div class="button">
        <input type="submit" name="submit" value="go" >
    </div>
    </div>
    </form>
    <?php
if(isset($_POST['submit'])){
$golink= $_POST['search'] ;
header("Location:"."https://www.".$golink.".com/");
}


echo " <br>";
echo " -----------------------------------------------------------------------------------";

?>


<br>

<?php
echo " <br>";
echo " <br>";
echo "  Question 6 ";
echo " <br>";

echo (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']);

echo " <br>";

echo " -----------------------------------------------------------------------------------";
?>

<h2>CALCULATOR</h2>
<form>
  

        Number One: <input type="text" name="numberone" placeholder="enter first number">
        <select name="operator">
            <option> ADDITION</option>
            <option> SUBSTRACTION</option>
            <option> MULTIPLY</option>
            <option> DIVISION</option>
         </select>
         Number two: <input type="text" name="numbertwo" placeholder="enter 2nd number">
        
        <button type="submit" value="calculate" name="submit" >calculate</button>
       
 </form>
 <p> the answer is : </p>
<?php
if (isset($_GET['submit'])) { 

    $resultone=$_GET['numberone'];
    $resulttwo=$_GET['numbertwo'];
    $operator=$_GET['operator'];
     switch ($operator){

   case "ADDITION":
    echo $resultone + $resulttwo;
    break;
    case "SUBSTRACTION":
     echo $resultone - $resulttwo;
     break;
    case "MULTIPLY":
    echo $resultone * $resulttwo;
    break;
    case "DIVISION":
     echo $resultone / $resulttwo;
    break;
     }

    }
echo "<br>";

echo " <br>";

echo " -----------------------------------------------------------------------------------";

?>





<?php
echo " <br>";
echo " <br>";
echo "  Question 5 ";

echo $_SERVER['SCRIPT_NAME'];

echo " <br>";

echo " -----------------------------------------------------------------------------------";

?>


<?php 
echo " <br>";
echo " <br>";
echo "  Question 8 ";

echo " <br>";
if (!isset($_COOKIE['count'])) { 
  echo "Welcome! This is the first time you have viewed this page."; 
  $cookie = 1;
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed this page ".$_COOKIE['count']." times."; 
  }
  
echo " <br>";

echo " -----------------------------------------------------------------------------------"

?> 














</body>
</html>