<?php
    include "../koneksi.php";
    $idm = $_GET['id'];
    $qry = mysqli_query($koneksi,"delete from mitra where id_mitra ='$idm'")
            or die("Error".mysqli_error($koneksi));
    header("location: ddm.php");


?>
