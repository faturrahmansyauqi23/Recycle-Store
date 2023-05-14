<?php
session_start();

$nama = "guest"; // Nilai default jika session tidak terdefinisi

if (isset($_SESSION['nama_pengguna'])) {
  $nama = $_SESSION['nama_pengguna'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="profile_pembeli.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="profil-pembeli" >
        <button class="tombol-kembali" onclick="window.location.href='Beranda_organik.html'">
          <img src="./Back button.svg" alt="">
            </button>
            <span class="tulisan-profil">Profil</span>
            <div class="foto-profil">
              <i class="fas fa-thin fa-user "></i>
              <div class="nama">
                <p class="petugas">Halo, <?php echo $nama; ?></p>
              </div>      
            </div>
        </div>
    </div>
 
        <div class="button-container">
          <button class="button1" onclick="window.location.href='login3.html'">Buka Toko</button>
         
    

          <button class="button2" onclick="window.location.href='login2.html'">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <div class="keluar">keluar</div>
          </button>
        </div>
      </div>
      <div class="kolom-icon"></div>
      <button class="icon-profil" onclick="window.location.href='Profile_Pembeli.php'">
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
      <button class="icon-home" onclick="window.location.href='Beranda_nonorganik.html'">
        <img class="icon-home" alt="" src="./home.svg" />
      </button>
</body>
</html>
