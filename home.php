<!DOCTYPE html>
<html>
<?php
session_start();
$status = $_SESSION['status'];
if ($status != true){
    header("location: index.php?pesan=belum_login");
}
?>
<head>
	<title>Daftar Laporan Sarpra</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
          crossorigin="anonymous">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="class_paging.php">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<!--navnye-->
<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <a class="navbar-brand" href="home.php">
        <img src="gambar/TS1.png" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin: 0 auto;">

        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="gantipw.php">Ganti Password</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
    </div>
</nav>
<!--navnye-->

<br>
<br>

<h3 align="center" style="font-family: sans-serif;">Daftar Laporan Sarpra</h3>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8"><a href="tmb.php"><button class="btn btn-success" style="margin-bottom: 5px;"><i class="fas fa-folder-plus">     Tambah Laporan</i></button></a></div>
        <div class="col-md-4">
          <div class="row" style="margin-right: 0; margin-left: 0;">
            <form class="form-inline" method= 'post' action= "#" style="width: 100%; border-right-width: 5px;padding-right: 5px;">
                <div class="input-group" style="margin-bottom: 5px; width: 100%;">
                    <input type="text" class="form-control" name="cari2" placeholder="No Insiden/Nama Pelapor" aria-label="No Insiden/Nama Pelapor" aria-describedby="button-addon2" style="text-align: center">
                    <div class="input-group-append" >
                        <button class="btn btn-success" type="submit" id="button-addon2" name="cari" value="cari">Cari&nbsp;<i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
          </div>  
        </div>
        

    </div>
</div>

<div class="container" >
<?php
    include "koneksi.php";
//    seacrh-button-start
    if (isset($_POST['cari'])) {
        echo "<table class='table-bordered table-striped' id='table' width='100%' border='1' align='center' style='text-align: center'>
    <thead class='thead-light'>
    <tr>
        <td> Nomor Laporan </td>
        <td> Nama Pelapor </td>
        <td> Kelas </td>
        <td> Wali Kelas </td>
        <td> Perihal </td>
        <td> Waktu Kejadian </td>
        <td> Tanggal Kejadian </td>
        <td> Lokasi Kejadian </td>
        <td> Status </td>
    </tr>
    </thead>";
        $tampil = mysqli_query($koneksi, "SELECT insiden.no_insiden,siswa.nama,siswa.kelas,insiden.perihal,insiden.walas,insiden.WK,insiden.tgl,insiden.lokasi,insiden.status
                                          FROM insiden
                                          LEFT JOIN siswa ON insiden.NIS = siswa.NIS
                                          WHERE siswa.nama like '%$_POST[cari2]%' or insiden.no_insiden like '%$_POST[cari2]%'
                                          ORDER BY insiden.no_insiden");
        while ($row = mysqli_fetch_array($tampil)) {
            $nois = $row['no_insiden'];
            $nama = $row['nama'];
            $kelas =$row['kelas'];
            $juru =$row['perihal'];
            $wal = $row['walas'];
            $WK = $row['WK'];
            $tgl = $row['tgl'];
            $lok = $row['lokasi'];
            $sts = $row['status'];
            echo "<tr>
                  <td>$nois</td>
                  <td>$nama</td>
                  <td>$kelas</td>
                  <td>$wal</td>
                  <td>$juru</td>
                  <td>$WK</td>
                  <td>$tgl</td>
                  <td>$lok</td>
                  <td>$sts</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<table class='table-bordered table-striped' id='table' width='100%' border='1' align='center' style='text-align: center'>
    <thead class='thead-light'>
    <tr>
        <td> Nomor Laporan </td>
        <td> Nama Pelapor </td>
        <td> Kelas </td>
        <td> Wali Kelas </td>
        <td> Perihal </td>
        <td> Waktu Kejadian </td>
        <td> Tanggal Kejadian </td>
        <td> Lokasi Kejadian </td>
        <td> Status </td>
    </tr>
    </thead>";
        $tampil = mysqli_query($koneksi, "SELECT insiden.no_insiden,siswa.nama,siswa.kelas,insiden.perihal,insiden.walas,insiden.WK,insiden.tgl,insiden.lokasi,insiden.status
                                          FROM insiden
                                          LEFT JOIN siswa ON insiden.NIS = siswa.NIS
                                          ORDER BY insiden.no_insiden");
        while ($row = mysqli_fetch_array($tampil)) {
            $nois = $row['no_insiden'];
            $nama = $row['nama'];
            $kelas =$row['kelas'];
            $juru =$row['perihal'];
            $wal = $row['walas'];
            $WK = $row['WK'];
            $tgl = $row['tgl'];
            $lok = $row['lokasi'];
            $sts = $row['status'];
            echo "<tr>
                  <td>$nois</td>
                  <td>$nama</td>
                  <td>$kelas</td>
                  <td>$wal</td>
                  <td>$juru</td>
                  <td>$WK</td>
                  <td>$tgl</td>
                  <td>$lok</td>
                  <td>$sts</td>
                  </tr>";
        }
        echo "</table>";
    }
?>


</body>
</html>
