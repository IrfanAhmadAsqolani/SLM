<?php
include 'koneksi.php';
if (isset($_POST['submit'])){
    $PL = $_POST['user'];
    $PB = $_POST['ka'];
    $KPB = $_POST['PB'];

    $qry = mysqli_query($koneksi,"select nama,pass from karyawan where nama ='{$PL}' and pass='{$PB}' ")
    or die("failed to query database".mysqli_error($koneksi));
    $data=mysqli_fetch_row($qry);
    if ($data [0] == $PL && $data [1] == $PB)
    {
        $q = mysqli_query($koneksi,"update karyawan set pass ='{$KPB}' where nama ='{$PL}'")
        or die("failed to query database".mysqli_error($koneksi));
        if($q){
            echo "<script type='text/javascript'>
                            alert('Password berhasil di ubah');
                            window.location = 'index.php';
                            </script>";
        }
    }
    else
    {
        echo "<script type='text/javascript'>
                alert('Username dan Kode Aktivasi tidak sesuai');
                history.back(self);
                </script>";
    }
}
?>