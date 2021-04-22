<!DOCTYPE html>
<html>
<head>
	<title>Lupa Password</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
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
                    <img src="gambar/kisel.png" class="rounded" alt="..." width="200" style="margin-top: 20px; margin-bottom: 20px;">
                </div>
                <div class="form-group">
                    <form action="forget.php" method="post">
                        <div class="input-group" style="position: relative;">
                            <label for="username">Username</label>
                            <input class="inline" type="text" placeholder="Enter Username" name="nama" required>
                        </div>
                        <div class="input-group" style="position: relative;">
                            <label for="password">E-Mail</label>
                            <input class="inline" type="email" placeholder="Enter E-Mail" name="email"  required>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">Kirim</button>
                    </form>
                </div>
            </div>
            <span class="float-right"><a href="index.php" style="color: #0000ff;">Login</a></span>
        </div>
    </div>
</div>

</body>
</html>