<?php
include"koneksi.php";
 
if(isset($_POST['update'])){
$id            = $_POST['id'];
$nama     = $_POST['nama'];
$username    = $_POST['username'];
$password    = $_POST['password'];
$level    = $_POST['level'];
$poin = $_POST['poin'];
 
$data = mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$password', level='$level', poin='$poin' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
echo "Berhasil Update Data <br>";
echo "<a href='halaman_admin.php'>Kembali</a>";
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='halaman_admin.php'>Kembali</a>";
}
}
?>