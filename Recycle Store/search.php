<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
    <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'db_barang';
    
    $conn = new mysqli($host, $user, $password, $database);
    
    // Periksa apakah koneksi berhasil
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }
    
    // Cek apakah ada kata kunci pencarian yang dikirimkan
    if (isset($_POST['search'])) {
        $searchKeyword = $_POST['search'];
    
        // Lakukan pencarian data di database berdasarkan kata kunci
        $sql = "SELECT * FROM tbl_barang WHERE nama LIKE '%$searchKeyword%'";
        $result = $conn->query($sql);
    
        // Periksa apakah ada hasil pencarian
        if ($result->num_rows > 0) {
            echo '<h2>Hasil pencarian</h2>'; 
            echo '<div class="search-results">'; // Buat kontainer untuk hasil pencarian
    
            // Tampilkan hasil pencarian
            while ($row = $result->fetch_assoc()) {
                echo '<div class="search-result">';
                echo '<a href="product-detail.html?id=' . $row['id'] . '">';
                echo '<img src="img/' . $row['gambar'] . '" alt="' . $row['nama'] . '" width="100" height="100">';
                echo '</a>';
                echo '<p>Nama barang: ' . $row['nama'] . '</p>';
                echo '<p>Harga barang: ' . $row['harga'] . '</p>';
                echo '<p>Deskripsi: ' . $row['deskripsi'] . '</p>';
                echo '</div>';
            }
    
            echo '</div>'; // Akhiri kontainer hasil pencarian
        } else {
            echo '<h2>Hasil pencarian</h2>';
            echo "Barang tidak ditemukan.";
        }
    
        // Bebaskan memori setelah selesai menggunakan hasil query
        $result->free_result();
    }
    
    // Tutup koneksi ke database
    $conn->close();
    ?>
     <div class="kolom-icon"></div>
  <button class="icon-profil" onclick="window.location.href='profile_pembeli.php'">
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
  <button class="icon-chat" onclick="window.location.href='HalamanChat.html'">
    <img
        class="icon-chat"
        alt=""
        src="./chat.png"
        id="bichatDotsIcon"
      />
  </button>
  <button class="icon-home" onclick="window.location.href='Beranda_organik.html'">
    <img class="icon-home" alt="" src="./home.svg" />
  </button>
</body>
</html>


