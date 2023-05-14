<head>
    <meta charset="UTF-8">
    <title>Form Add Barang</title>
    <link rel="stylesheet" href="add.css">
</head>

<body>
<div class="kembali">
        <button class="tombol-kembali" onclick="window.location.href='profile_penjual.php'">
        <img src="Back button.svg" alt="">
         </button>
         <span class="tulisan-notifikasi">Kembali</span>
        </div>
    <form action="add.php" method="post" name="form1" enctype="multipart/form-data">
        <h1>UPLOAD BARANG</h1>
        <table width="25%" border="0">
            <tr> 
                <td>Nama barang</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr> 
                <td>Harga barang</td>
                <td><input type="text" name="harga" required></td>
            </tr>
            <tr> 
                <td>Deskripsi barang</td>
                <td><input type="text" name="deskripsi" required></td>
            </tr>
            <tr> 
                <td>Gambar barang</td>
                <td><input type="file" name="image" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Upload"></td>
            </tr>
           
            <?php
            // Check If form submitted, insert form data into users table.
            if(isset($_POST['Submit'])) {
                $nama = $_POST['nama'];
                $harga = $_POST['harga'];
                $deskripsi = $_POST['deskripsi'];
                $gambar = $_FILES['image']['name'];

                // include database connection file
                include_once("config.php");

                // Insert user data into table
                $result = mysqli_query($mysqli, "INSERT INTO tbl_barang(nama,harga,deskripsi,gambar) VALUES('$nama','$harga','$deskripsi','$gambar')");

                // Show message when user added
                echo "<center>Barang berhasil diupload. <a href='index.php'>Lihat Barang</a></center>";
            }
            ?>
        </table>
    </form>
    <script>
        function goBack() {
            window.location.href='profile_penjual.php';
        }
    </script>
</body>

</html>
