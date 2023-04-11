<?php
$ch = require("../init_curl.php");
curl_setopt($ch, CURLOPT_URL, "http://localhost:3000/khachhang/loginkhachhang");
// curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
$reposn = curl_exec($ch);
curl_close($ch);

$data = json_decode($reposn, true);
// $status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
// if ($status_code == 422) {
//     echo "Invail data";
//     print_r($data["err"]);
//     exit;
// }
var_dump($data);
