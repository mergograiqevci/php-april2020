<?php
/*Mergo E Shtuar...*/
setcookie("username", "", time() - 3600); //per 24*3600
?>
<html>
<body>

<?php
header("Location: ../index.php");
exit();
?>


</body>
</html>