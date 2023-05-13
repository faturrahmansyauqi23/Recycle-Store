<?php
require "koneksi.php";
$nama = $_POST["nama"];
$telepon = $_POST["telepon"];
$sandi = $_POST["sandi"];

$query_sql = "INSERT INTO tbl_pengguna (nama, telepon, sandi)
VALUES ('$nama', '$telepon', '$sandi')";

if(mysqli_query($conn, $query_sql)){
    header("Location: login2.html");
} else {
    echo "Pendaftaran Gagal :" . mysqli_error($conn);
}

