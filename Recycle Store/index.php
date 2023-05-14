<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_barang ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Informasi barang</title>
    <link rel="stylesheet" href="index.css" />
</head>
<div class="kembali">
        <button class="tombol-kembali" onclick="window.location.href='add.php'">
        <img src="Back button.svg" alt="">
         </button>
         <span class="tulisan-notifikasi">Kembali</span>
        </div>
 
    <table width='80%' border=2>
 
    <tr>
        <th>Nama barang</th> <th>Harga barang</th> <th>Deskripsi barang</th> <th>Gambar barang <th>Update barang</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['deskripsi']."</td>";
        echo "<td>".$user_data['gambar']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Ubah</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>