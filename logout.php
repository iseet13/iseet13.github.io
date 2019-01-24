<?php
require "db.php";
unset($_SESSION['logged_user']); ////завершение сеанса
header('Location: /');  //////выход на главную
?>
