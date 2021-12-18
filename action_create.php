<?php
 include "koneksi.php";
 
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
 
$data = mysqli_query($koneksi, "INSERT INTO user SET nama='$nama', username='$username', password='$password',level='$level'") or die ("data salah : ".mysqli_error($mysqli));

if ($data) {
    echo "Berhasil Input Data!";
    echo "<a href='halaman_admin.php'>lihat</a>";
} else {
    echo "Gagal Input Data!";
    echo "<a href='create.php'>Kembali</a>";
    }
}
?>