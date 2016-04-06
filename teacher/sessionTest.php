<?php
session_start();
// store session data
$_SESSION['user']="a";
$_SESSION['name']="a";


// unset($_SESSION['user']);


echo $_SESSION['user'];
?>