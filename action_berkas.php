<?php
 include "koneksi.php";
 
if(isset($_POST['tambah'])){
    $berkas = $_POST['berkas'];
 
$tambah = mysqli_query($koneksi, "INSERT INTO user SET berkas='$berkas'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($tambah) {
    echo "Berhasil menambahkan berkas!";
    echo "<a href='halaman_user.php'>lihat</a>";
} else {
    echo "Berkas gagal dikirim!";
    echo "<a href='create.php'>Kembali</a>";
    }
}
?>