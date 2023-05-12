<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $deskripsi=$_POST['deskripsi'];
    $gambar=$_POST['gambar'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_barang SET nama='$nama',harga='$harga',deskripsi='$deskripsi', gambar='$gambar' WHERE id='$id'");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_barang WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $harga = $user_data['harga'];
    $deskripsi = $user_data['deskripsi'];
    $gambar = $user_data['gambar'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
    <link rel="stylesheet" href="edit.css" />
</head>
<div class="kembali">
        <button class="tombol-kembali" onclick="window.location.href='index.php'">
        <img src="Back button.svg" alt="">
         </button>
         <span class="tulisan-notifikasi">Kembali</span>
        </div>
 
<body>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama barang</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Harga barang</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>Deksripsi <i class="ion-battery-charging"></i></td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>

            <tr> 
                <td>Gambar <i class="gambar"></i></td>
                <td><input type="file" name="gambar" value=<?php echo $gambar;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Ubah"></td>
            </tr>
        </table>
    </form>
</body>
</html>