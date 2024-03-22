<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<a href="index.php">index</a>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>