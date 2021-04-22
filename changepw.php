<?php
include 'koneksi.php';
if (isset($_POST['submit'])){
    $PL = $_POST['PL'];
    $PB = $_POST['PB'];
    $KPB = $_POST['KPB'];
    $user = $_POST['userr'];
    $qry = mysqli_query($koneksi,"select pass from siswa where nama ='{$user}'")
    or die("failed to query database".mysqli_error($koneksi));
    $data=mysqli_fetch_row($qry);
    if ($data [0] == $PL)
    {
        if($PB == $KPB)
        {
            $q = mysqli_query($koneksi,"update siswa set pass ='{$PB}' where nama ='{$user}'")
            or die("failed to query database".mysqli_error($koneksi));
            if($q){
                echo "<script type='text/javascript'>
                            alert('Password Anda Berhasil diganti');
                            window.location = 'home.php';
                            </script>";

            }
        }
        else
        {
            echo "<script type='text/javascript'>
                   alert('Password Lama dan Password Baru tidak sesuai!');
                   history.back(self);
                   </script>";
        }

    }
    else
    {
        echo "<script type='text/javascript'>
                   alert('Password Lama tidak sesuai!');
                   history.back(self);
                   </script>";
    }
}
?>