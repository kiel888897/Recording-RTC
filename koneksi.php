<?php
$host="localhost";
$user="multiweb_admin";
$password="admin12345";
$db="multiweb_recvc";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>