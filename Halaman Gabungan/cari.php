<?php

$conn = mysqli_connect("localhost", "root", "", "db_barang");

if (!$conn){
    echo "koneksi gagal" . mysqli_connect_error();
}

?>

