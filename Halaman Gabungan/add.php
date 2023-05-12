<head>
    <meta charset="UTF-8">
    <title>Form Add Barang</title>
    <link rel="stylesheet" href="add.css">
</head>

<body>
<div class="kembali">
        <button class="tombol-kembali" onclick="window.location.href='Beranda.html'">
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
            <tr>
                <td></td>
                <td><input type ="button" name="kembali" value="Kembali" onclick="goBack()"></td>
            </tr>
  <div class="kolom-icon"></div>
  <button class="icon-profil" onclick="window.location.href='ProfilPembeli.html'">
    <img
        class="icon-profil"
        alt=""
        src="./profile.svg"
        id="vectorIcon2"
      />
  </button>
  <button class="icon-notifikasi" onclick="window.location.href='#'">
    <img
        class="icon-notifikasi"
        alt=""
        src="./notification.png"
        id="phbellIcon"
      />
  </button>
  <button class="icon-chat" onclick="window.location.href='#'">
    <img
        class="icon-chat"
        alt=""
        src="./chat.png"
        id="bichatDotsIcon"
      />
  </button>
  <button class="icon-home" onclick="window.location.href='Beranda.html'">
    <img class="icon-home" alt="" src="./home.svg" />
  </button>
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
            window.location.href='Beranda.html';
        }
    </script>
</body>

</html>
