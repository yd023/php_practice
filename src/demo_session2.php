<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<a href="index.php">index</a>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

<?php
print_r($_SESSION);
?>

</body>
</html>