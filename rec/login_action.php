<?php
session_start();

include "koneksi.php";

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "select * from users where email='".$email."' and password='".$password."'";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id"]=$row["id"];
		$_SESSION["nama"]=$row["nama"];
		$_SESSION["email"]=$row["email"];
		$_SESSION["handphone"]=$row["handphone"];
	

		header("Location:index.php");
		
	}else {
		echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
	}
?>