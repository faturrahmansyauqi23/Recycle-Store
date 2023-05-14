<?php
require "koneksi.php";
$nama = $_POST["nama"];
$telepon = $_POST["telepon"];
$sandi = $_POST["sandi"];
$namatoko = $_POST["namatoko"];

$query_sql = "INSERT INTO tbl_pengguna (nama, telepon, sandi, namatoko)
VALUES ('$nama', '$telepon', '$sandi', '$namatoko')";

if(mysqli_query($conn, $query_sql)){
    header("Location: login3.html");
} else {
    echo "Pendaftaran Gagal :" . mysqli_error($conn);
}

