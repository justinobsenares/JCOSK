
<?php
session_start();
unset($_SESSION["username_REG"]);
header("Location:index2.php");
?>