<?php  
include 'koneksi.php';
$uname = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["password"];
$noHP = $_POST["noHP"];

$query_sql = mysqli_query($conn, "INSERT INTO `tbl_users`(`id_user`, `username`, `email`, `password`, `noHP`) VALUES (null,'$uname','$email',md5('$pass'),'$noHP')");

if ($query_sql){
    header("Location: index.php");
}else{
    echo "gagal" . mysqli_error($conn);
    
}
