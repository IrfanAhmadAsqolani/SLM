<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['nama'];
$password = $_POST['pass'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from sarpra where nama='$username' and pass='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$row = mysqli_fetch_array($data);
if($cek > 0){
	$_SESSION['user'] = $row['nama'];
	$_SESSION['status'] = "login";
	header("location:home.php");
	
}else{
	header("location:index.php?pesan=gagal");
}
?>
