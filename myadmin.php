<?php  
include 'koneksi.php';
$jdl = $_POST["judul"];
$jb = $_POST["jambuka"];
$jt = $_POST["jamtutup"];
$dk = $_POST["deskripsi"];
$tk = $_POST["tiket"];
$gmbr = $_POST["gambar"];

$query_sql = mysqli_query($conn, "INSERT INTO `blog_table`(`id_blog`, `judul`, `jambuka`, `jamtutup`, 'deskripsi', `tiket`, 'gambar') VALUES (null,'$jdl','$jb','$jt','$dk','$tk','$gmbr')");

if ($query_sql){
    header("Location: index.php");
}else{
    echo "gagal" . mysqli_error($conn);
    
}
