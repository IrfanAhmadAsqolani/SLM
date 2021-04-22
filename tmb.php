<!DOCTYPE html>
<html>
<?php
    session_start();
    $nikk = $_SESSION['nik'];
    $status = $_SESSION['status'];
    if ($status != true){
        header("location:index.php?pesan=belum_login");
    }

?>
<head>
	<title>Tambah Laporan Baru</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
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

<div class="container">
    <div class="col-md-7" style="margin: auto; border: 1px solid #dcdcdc; background-color: #F7F7F7;">
        <div class="form-group"></div>
            <div class="text-center" style="margin-top: 10px; margin-bottom: 10px;">
              <h3 style="text-align: center; font-family: Helvetica;">Data Laporan Baru</h3>
            </div>
              <form action="p_tmb.php" method="post">
                  <input type="hidden" name=nik value=<?php echo $nikk ?>>
                  <input type="hidden" name="status" value="Dalam Proses">
                <div class="form-group row">
                    <label for="KYD" class="col-sm-4 col-form-label">Perihal</label>
                    <div class="col-sm-8">
                        <input type="text" id="KYD" class="form-control" name="perihal" required>
                    </div>
                </div>
                  <div class="form-group row">
                      <label for="TK" class="col-sm-4 col-form-label">Tanggal Kejadian</label>
                      <div class="col-sm-8">
                          <input type="date" id="TK" class="form-control" name="TK" required>
                      </div>
                  </div>
                <div class="form-group row">
                  <label for="WK" class="col-sm-4 col-form-label">Waktu Kejadian</label>
                   <div class="col-sm-8">
                        <input type="time" id="WK" class="form-control" name="WK" required>
                   </div>
                </div>
                  <div class="form-group row">
                      <label for="lokasi" class="col-sm-4 col-form-label">Lokasi Kejadian</label>
                      <div class="col-sm-8">
                          <input type="text" id="lokasi" class="form-control" name="lokasi" required>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="walas" class="col-sm-4 col-form-label">Wali Kelas</label>
                      <div class="col-sm-8">
                          <input type="text" id="walas" class="form-control" name="walas" required>
                      </div>
                  </div>
                <button type='submit' name='submit' class="btn btn-success" style="width: 100%;">Simpan</button>
              </form>
            <br>
        </div>
    </div>
</div>

<br>
<br>
<br>

</body>
</html>
