<?php
session_start();

$_SESSION['id']='';
$_SESSION['nama']='';
$_SESSION['email']='';
$_SESSION['handphone']='';

unset($_SESSION['id']);
unset($_SESSION['nama']);
unset($_SESSION['email']);
unset($_SESSION['handphone']);

session_unset();
session_destroy();
header('Location:login.php');

?>