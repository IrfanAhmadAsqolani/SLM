<!DOCTYPE html>
<html>
<?php
session_start();
$user = $_SESSION['user'];
$status = $_SESSION['status'];
if ($status != true){
    header("location: index.php?pesan=belum_login");
}
?>
<head>
    <title>Ganti Password</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<!--navnye-->
<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <a class="navbar-brand" href="home.php">
        <img src="../gambar/TS1.png" height="30" alt="">
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

<div class="container">
    <div class="gantipw-container">
        <div class="col-md-12" style="background-color: #F7F7F7; margin: 0 auto; border: 1px solid #DCDCDC; border-radius: 10px;">
            <div>
                <div class="text-center">
                    <h3 style="margin-top: 20px; margin-bottom: 20px;">Ganti Password</h3>
                </div>
                <div class="form-group">
                    <form action="changepw.php" method="post">
                        <input class="inline" type=hidden name=userr value=<?php echo $user ?>>
                        <div class="input-group" style="position: relative;">
                            <label for="password">Password Lama</label>
                            <input class="inline" type="password" placeholder="Enter Password Lama" name="PL" required>
                        </div>
                        <div class="input-group" style="position: relative;">
                            <label for="password">Password Baru</label>
                            <input class="inline" type="password" placeholder="Enter Password baru" name="PB" required>
                        </div>
                        <div class="input-group" style="position: relative;">
                            <label for="password">Konfirmasi Password Baru</label>
                            <input class="inline" type="password" placeholder="Enter Password Baru" name="KPB" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success" style="width: 100%; margin-top: 10px;">Ganti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>