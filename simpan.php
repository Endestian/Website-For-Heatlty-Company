<?php 
require_once("connection.php");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$praktikum = $_POST['praktikum'];
$asisten = $_POST['asisten'];
$lab = $_POST['lab'];

if(isset($_POST['submit'])){
	if (isset($_POST['kodeasisten'])) {
		$kasisten=$_POST['kodeasisten'];
		$simpan = mysqli_query($connect, "INSERT INTO praktikum(nama, nim, praktikum, kode_asisten, asisten, lab) VALUES('$nama','$nim','$praktikum','$kasisten','$asisten','$lab')");
	}
}
if($simpan) {
	 echo "<script> alert('Terikasih Telah mengisi Feedback Praktikum'); location = 'index.php'; </script>";
} else {
echo "Proses Gagal!";
}
?>