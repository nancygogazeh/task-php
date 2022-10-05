<?php
$cookie_name = "DFGHJFGHJ";
$cookie_value = "Micheal";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "COOKIES NAME IS : '  " . $cookie_name . "' IS NOT SET!";
} else {
  echo "COOKIES '" . $cookie_name . "' IS SET!<br>";
  echo "THE VALUE IS: " . $_COOKIE[$cookie_name];
}

echo '<br>';
echo '<br>';

?>

</body>
</html>

<?php

setcookie($cookie_name, $cookie_value, time() - (86400 * 30), "/");
?>
<html>
<body>

<?php
echo "COOKIES 'user' IS DELETED.";
?>

</body>
</html>