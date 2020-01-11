<?php
	require_once("connection.php");
	$kode = $_POST['kode'];
	$pass = md5($_POST['pass']);
	$cekapotek = mysqli_query($connect, "SELECT * FROM apoteker WHERE kode_apoteker = '$kode'");
	$jumlah = mysqli_num_rows($cekapotek);
	$hasil = mysqli_fetch_array($cekapotek);
	if($jumlah == 0) {
		echo "<script> alert('Silahkan Hubungi IDI atau pemerintahan Setempat'); location = 'login.php'; </script>";
	} else {
		if($pass <=> $hasil['password']) {
			echo "<script> alert('password salah'); location = 'login.php'; </script>";
		} else {
			header('location:index.php');
		}
	}
?>