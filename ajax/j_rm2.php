<?php
require ("../koneksi.php");
$idm = $_POST['id_mitra'];
$sql = mysqli_query($koneksi, "SELECT id_mitra FROM mitra where company ='$idm'");
$row2=mysqli_fetch_array($sql);
$id_mitra=$row2[0];
$rs = mysqli_query($koneksi, "SELECT id,nomor_PO FROM po where id_mitra ='$id_mitra'");
while ($row = $rs->fetch_assoc()){
    $id = $row['id'];
    $no = $row['nomor_PO'];
    $res[] = ["id" => $id,"nomor_PO" => $no] ;
}
header('Content-type: application/json');
echo json_encode($res);
?>