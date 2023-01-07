<?php 
require_once "konek.php"; 
$id=$_GET["id"];
$metode=$_GET["metode"];
$fl2 = substr($metode,0,3);
$thn = date("Y");
$bln = date("m");

$cek_bukti=mysqli_num_rows(mysqli_query($link,"SELECT * FROM buktimpas WHERE user='$id' AND jenis='$fl2'"));
$cek_bukti += 1;

if ($cek_bukti < 10) {
    $nam = $fl2."-0".$cek_bukti;
} else {
    $nam = $fl2."-".$cek_bukti;
}
$kode = $id.$nam;
//$nam = $metode."-".$cek_bukti;
$fileName = 'http://rekam.wikan.live/uploads/'.$thn.'/'.$bln.'/'.$id.'-'.$metode.".webm";
$query = mysqli_query($link,"INSERT INTO buktimpas VALUES ('$kode', '$id', '$nam', '$fileName', '$fl2', '')");


                $query1 = "SELECT * FROM mpacloforms WHERE user = '$id' ";
    			$result1 = mysqli_query($link, $query1);
				$data1 = mysqli_fetch_assoc($result1);
				$temp = $data1["jawaban"];
				$temp2 = $temp."x".$nam;
				$queryx = mysqli_query($link,"UPDATE mpacloforms SET jawaban = '$temp2' WHERE user = '$id' AND jenis='skenario'");

echo "<script>alert('Berhasil Disimpan!'); window.location='buktilivenote.php' </script>";

?>

