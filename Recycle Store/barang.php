<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Koneksi ke database
    require "koneksibrg.php";

    // Ambil data dari form
    $namabrg = $_POST['namabrg'];
    $hargabrg = $_POST['hargabrg'];
    $deskripsibrg = $_POST['deskripsibrg'];

    // Validasi gambar
    $gambarbrg = $_FILES['gambarbrg'];
    $gambarbrg_name = $gambarbrg['name'];
    $gambarbrg_size = $gambarbrg['size'];
    $gambarbrg_tmp = $gambarbrg['tmp_name'];
    $gambarbrg_error = $gambarbrg['error'];
    $gambarbrg_ext = strtolower(pathinfo($gambarbrg_name, PATHINFO_EXTENSION));
    $allowed_exts = array('jpg', 'png');
    $max_size = 5000000; // 5 MB

    if ($gambarbrg_error === 0) {
        if (in_array($gambarbrg_ext, $allowed_exts)) {
            if ($gambarbrg_size <= $max_size) {
                $gambarbrg_data = file_get_contents($gambarbrg_tmp);

                // Query untuk menyimpan data barang ke database
                $query = "INSERT INTO tbl_barang (namabrg, hargabrg, deskripsibrg, gambarbrg) VALUES ('$namabrg', '$hargabrg', '$deskripsibrg', '$gambarbrg')";

                if (mysqli_query($conn, $query)) {
                    header("Location: login2.html");
                    exit;
                } else {
                    echo "Pendaftaran Gagal :" . mysqli_error($conn);
                }
            } else {
                echo "Ukuran gambar terlalu besar. Maksimal 5MB.";
            }
        } else {
            echo "Format gambar tidak diizinkan. Hanya format JPG dan PNG yang diperbolehkan.";
        }
    } else {
        echo "Terjadi kesalahan saat upload gambar.";
    }
}
?>

<!-- Form upload barang -->
<form method="POST" enctype="multipart/form-data">
    <label>Nama Barang:</label>
    <input type="text" name="namabrg">

    <label>Harga Barang:</label>
    <input type="number" name="hargabrg">

    <label>Deskripsi Barang:</label>
    <textarea name="deskripsibrg"></textarea>

    <label>Gambar Barang:</label>
    <input type="file" name="gambarbrg">

    <button type="submit">Upload</button>
</form>
