
<?php
require ("../koneksi.php");
$rs = mysqli_query($koneksi, "SELECT id_mitra,company FROM mitra");
while ($row = $rs->fetch_assoc()){
    $idm = $row['id_mitra'];
    $user = $row['company'];
    $res[] = ["id_mitra" => $idm,"company" => $user] ;
}
header('Content-type: application/json');
echo json_encode($res);


?>
