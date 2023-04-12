<!-- Thêm phiếu -->
<?php

$chk = require("../init_curl.php");
curl_setopt($chk, CURLOPT_URL, "http://localhost:3000/donhang/adddonhang");
curl_setopt($chk, CURLOPT_POSTFIELDS, json_encode($_POST));
$reposnk = curl_exec($chk);
$status_code = curl_getinfo($chk, CURLINFO_RESPONSE_CODE);
curl_close($chk);
$datak = json_decode($reposnk, true);
var_dump($datak);
// if ($status_code == 200) {
//     // header('Location: ../themPhieuChuyenKho.php?success=1');
//     // if (isset($_GET['success']) && $_GET['success'] == 1) {

//     //     echo '<script >';
//     //     echo 'alert(" Thêm thành công ")';
//     //     echo '</script>';
//     // }
//     echo '<script >';
//     echo 'alert(" Thêm thành công ")';
//     header('Location: ../themPhieuChuyenKho.php');
//     echo '</script>';
//     header('Location: ../themPhieuChuyenKho.php');
// }

?>