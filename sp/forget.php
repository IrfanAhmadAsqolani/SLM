<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($koneksi, $email);
    $query = mysqli_query($koneksi, "select * from karyawan where email = '$email'") or die("error" . Mysqli_error($koneksi));
    $data = mysqli_num_rows($query);
    if ($data > 0) {
        $str = "0123456789asdfghj";
        $str = str_shuffle($str);
        $str = substr($str, 0, 10);
        $query2 = mysqli_query($koneksi, "UPDATE karyawan set pass = '$str' where email = '$email'")
        or die("error" . Mysqli_error($db));
        $msg = "here is your code" . "<br>" . $str;

        require 'mailer/PHPMailer.php';
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPSecure = 'ssl';  // set mailer to use SMTP
        $mail->Port = 465;
        $mail->Host = "mail.kiselindonesia.com";  // specify main and backup server
        $mail->SMTPAuth = true;     // turn on SMTP authentication
        $mail->SMTPKeepAlive = true;    // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->Username = "no-reply@kiselindonesia.com";  // SMTP username
        $mail->Password = "@Kisel123456"; // SMTP password
        $mail->From = "no-reply@kiselindonesia.com";
        $mail->FromName = "Incident Report";

        $mail->addAddress($email);
        $mail->IsHTML(true);   // set email format to HTML
        $mail->Subject="PW";
        $mail->Body = $msg;


        if ($mail->Send()) {
            echo "<script type='text/javascript'>
                            alert('Berhasil');
                            window.location = 'ak.php';
                            </script>";
        } else    {
            echo "<script type='text/javascript'>
                   alert('Gagal!');
                   history.back(self);
                   </script>";
        }


    }
}
?>