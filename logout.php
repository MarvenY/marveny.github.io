<?php
session_start();
unset($_SESSION['username']);
$_SESSION['message']= 'You are now logged out, please log in again to continue';
header("Location: /login.php");
exit;
