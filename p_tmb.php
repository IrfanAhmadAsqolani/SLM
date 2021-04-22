<?php
include 'koneksi.php';
if (isset($_POST['submit'])){
        $qry = mysqli_query($koneksi,"select max(no)as insiden from insiden");
        $scr = mysqli_fetch_array($qry);
        $max = $scr['insiden'];
        $no = $max+1;
        $tgl = date('dmy');
    $angka ="SPR-".$no."-".$tgl;
    $perihal = $_POST['perihal'];
    $KYD = $_POST['KYD'];
    $WK = $_POST['WK'];
        $TK = $_POST['TK'];
    $TKS = date("d-m-Y", strtotime($TK));
    $walas = $_POST['walas'];
    $lokasi = $_POST['lokasi'];
    $NIS = $_POST['nik'];
    $sta = $_POST['status'];
    $query = mysqli_query($koneksi,"insert into 
        insiden(no_insiden,perihal,tgl,WK,lokasi,walas,NIS,status) 
        values('$angka','$perihal','$TKS','$WK','$lokasi','$walas','$NIS','$sta')")
            or die("failed to query database".mysqli_error($koneksi));
    if ($query){
        header("location: home.php");
    }else{
        echo "data tidak tersimpan";
    }

}



?>