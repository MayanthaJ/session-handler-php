<?php
session_start();

unset($_SESSION['isLogged']);
// unset($_SESSION['active']);

session_destroy();

header("Location: index.php");
exit;

?>