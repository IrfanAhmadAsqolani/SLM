<?php
include "../koneksi.php";
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($db,$email);
  $query = mysqli_query($db,"select * from karyawan where email = '{$email}'")
        or die("error".Mysqli_error($db));
  $data = mysqli_num_rows($query);
  if ($data > 0) {
    $str = "0123456789asdfghj";
    $str = str_shuffle($str);
    $str = substr($str, 0, 10);
    $query2 = mysqli_query($db,"UPDATE akun set token = '$str' where email = '$email'")
        or die("error".Mysqli_error($db));
    $msg = "here is your code"."<br>".$str;
    // mail($email,"Token unik",$msg);
    require_once("../PHPMailerAutoload/PHPMailerAutoload.php");
    // require ("../PHPMailerAutoload/class.phpmailer.php");
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "your@gmail.com";
    $mail->Password = "yourpasword";
    $mail->SetFrom("erilkun212", "erilkun");
    $mail->Subject = "Kode unik";
    $mail->Body = $msg;
    $mail->AddAddress($email);
     if(!$mail->Send()) {
        echo "Tidak dapat mengirim pesan " . $mail->ErrorInfo;
     } else {
        echo "Periksa email anda sekarang";
     }
    header('location: index.php');
    }else {
    echo "Email Tidak Ditemukan";
  }
}
 ?>
