<?php
require 'koneksi.php';
session_start();

if (isset($_POST['masuk'])) {
  $nama = $_POST['nama'];
  $sandi = $_POST['sandi'];

  // Query untuk mencari user dengan username dan password yang sesuai
  $query = "SELECT * FROM tbl_pengguna WHERE nama = '$nama' AND sandi = '$sandi'";
  $result = mysqli_query($conn, $query);

  // Memeriksa apakah user ditemukan atau tidak
  if (mysqli_num_rows($result) > 0) {
    // Jika ditemukan, simpan nama pengguna ke dalam session
    $_SESSION['nama_pengguna'] = $nama;
    
    // Redirect ke halaman profil
    header("Location: Beranda_organik.html");
    exit();
  } else {
    // Jika tidak ditemukan, tampilkan pesan error pada halaman login
    $error = "Nama pengguna atau kata sandi salah. Silakan coba lagi.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login2.css" media="screen" title="no title" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/release/v5.6.3/css/all.css"
    />
    <title>Login page</title>
  </head>
  <body>
    <div class="input">
    <h1>MASUK</h1>
        <form action="masuk.php" method="POST">
            <?php if (isset($error)) { ?>
            <div class="alert">
              <p><?php echo $error; ?></p>
            </div>
            <?php } ?>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="nama" placeholder="Nama Pengguna" required/>
            </div>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="password" name="sandi" placeholder="Kata Sandi" required/>
            </div>
            <button type="submit" name="masuk" class="btn-input">Masuk</button>
            <div class="bottom">
                <p> Belum punya akun?
                    <a href="daftar.html" style="text-decoration: none;">Daftar disini</a>
                </p>
            </div>
        </form>
    </div>
    </div>
  </body>
</html>


