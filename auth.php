<?php
session_start();
if(!isset($_SESSION["sdt"])){
header("Location: signin.php");
exit(); }
