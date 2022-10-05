<?php
$users=array('ali','mohammed', 'mahmoud' , 'osama' , 'maen');
$username=$_GET['username'];
if(in_array($username,$users)){
echo "welcome". " " . $username ." " ."to control panel for admin";
} else{
    echo " sorry this admin is not exist in client area";
}





// echo " your name is ". $_GET['username']. "<br>";
// echo " your password is ". $_GET['password'] . "<br>";

?>