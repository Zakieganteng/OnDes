<?php

$sname= "localhost";
$uname= "root";
$password= "";
$db_name = "expo_2023";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
  }
  ?>
  