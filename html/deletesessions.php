<?php
/*Mergo E Shtuar...*/
session_start();

unset($_SESSION['Qytete']);

session_destroy();
header("Location: ../html/gallery.php");
exit();

?>