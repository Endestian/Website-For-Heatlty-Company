<?php 
	require_once("connection.php");
	$nama = $_POST['nama'];
	$kode = $_POST['kode'];
	$sp = $_POST['specialis'];
	$pass = md5($_POST['pass']);
	if ($sp == "dokter") {
		$sql_get = mysql_query("SELECT * FROM dokter WHERE kode_dokter = '$kode'");
		$num_row = mysql_num_rows($sql_get);
		if ($num_row == 0) {
			$simpan = mysqli_query($connection, "INSERT INTO dokter( nama_dokter, alamat, password_dokter, kode_dokter)");
			if($simpan) {
	 			echo "<script> alert('Register Sukses Dokter'); location = 'register.php'; </script>";
			} else {
				echo "Proses Gagal!";
			}
		}

	} elseif($sp == "apoteker") {
		$sql_get = mysql_query("SELECT * FROM apoteker WHERE kode_apoteker = '$kode'");
		$num_row = mysql_num_rows($sql_get);
		if ($num_row == 0) {
			$simpan = mysqli_query($connection, "INSERT INTO apoteker( nama_apoteker, alamat, password_dokter, kode_dokter)");
			if($simpan) {
	 			echo "<script> alert('Register Sukses Apoteker'); location = 'register.php'; </script>";
			} else {
				echo "Proses Gagal!";
			}
		}

	} else {
		echo "Anda Siapa?";
	}
?>