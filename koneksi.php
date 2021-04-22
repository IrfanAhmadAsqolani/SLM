<?php
error_reporting(E_ALL);
$koneksi = mysqli_connect("localhost","root","","slm");//isikan sesuai nama database kalian

// Check connection 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
