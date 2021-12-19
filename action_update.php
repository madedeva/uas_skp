<?php
include"koneksi.php";
 
if(isset($_POST['update'])){
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$poin = $_POST['poin'];
 
$data = mysqli_query($koneksi, "UPDATE user SET nama='$nama', username='$username', password='$password', level='$level', poin='$poin' WHERE id='$id'");
 
if ($data) {
    header("location:halaman_admin.php?pesan=berhasil");

} else {
    header("location:halaman_admin.php?pesan=gagal");
}
}
?>