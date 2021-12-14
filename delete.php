<?php 

include "koneksi.php";
 
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        echo "<b>Data yang dihapus tidak ada</b>";
    }
    else {
        $delete = mysqli_query($koneksi,"DELETE FROM user WHERE id='$_GET[id]'") or die ("Mysql Error : ".mysqli_error($mysqli));
        if($delete){
            echo "Berhasil Hapus Data <br>";
            echo "<a href='halaman_admin.php'>Kembali</a>";
        }
    }
}
?>