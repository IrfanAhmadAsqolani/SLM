<!DOCTYPE html>
<html>
<head>
	<title>Login Sarpra Report</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="login-container">
        <div class="col-md-12" style="background-color: #F7F7F7; margin: 0 auto; border: 1px solid #DCDCDC; border-radius: 10px;">
            <div>
                <div class="text-center">
                    <img src="../gambar/TS2.png" class="rounded" alt="..." width="200" style="margin-top: 20px;">
                </div>
                <div class="form-group">
                    <form action="cek_login.php" method="post">
                        <?php
                        if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "gagal"){
                                echo "<script type='text/javascript'>
                            alert('Username & Password Anda Salah!');
                            history.back(self);
                            </script>";
                            }else if($_GET['pesan'] == "logout"){
                                echo "<script type='text/javascript'>
                            alert('Anda Berhasil Logout');
                            window.location('index.php');
                            </script>";
                            }else if ($_GET['pesan'] == "belum_login"){
                                echo "<script type='text/javascript'>
                            alert('silahkan login terlebih dahulu');
                            window.location('index.php');
                            </script>";
                            }
                        }
                        ?>
                        <div class="input-group" style="position: relative;">
                            <label for="username">Username</label>
                            <input class="inline" type="text" placeholder="Enter Username" name="nama" required>
                        </div>
                        <div class="input-group" style="position: relative;">
                            <label for="password">Password</label>
                            <input class="inline" type="password" placeholder="Enter Password" name="pass" required>
                        </div>
                        <button type="submit" class="btn btn-success" style="width: 100%; margin-top: 10px; margin-bottom: 20px;">Masuk</button>
                    </form>
                </div>
            </div>
            <span class="float-right"><a href="lupepw.php" style="color: #0000ff;">Lupa Kata Sandi?</a></span>
        </div>
    </div>
</div>
</body>
</html>
