<?php
require "libs/rb.php";
R::setup( 'mysql:host=localhost;dbname=reg',
        'root', '' ); //вводим свои данные
session_start();
?>