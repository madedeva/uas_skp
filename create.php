<html>
<head>
<title>Tambah Akun</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">e-SKP FTK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="halaman_admin.php">Daftar Akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Tambah Akun</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="tambah_skp.php">Tambah SKP</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" id="logout" href="berkas_masuk.php">Berkas Masuk</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="logout.php"><b>Logout</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>

<?php
 include "koneksi.php";
 
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
 
$data = mysqli_query($koneksi, "INSERT INTO user SET nama='$nama', username='$username', password='$password',level='$level'") or die (mysqli_error($koneksi));

if ($data) {
  echo '
  <div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil menambahkan akun!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>';
} else {
    echo "Gagal Input Data!";
    echo "<a href='create.php'>Kembali</a>";
    }
}
?>

<div class="container">
<form action="create.php" method="post">
<div class="form-group">
    <label for="exampleInputEmail1">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username Mahasiswa</label>
    <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan username mahasiswa" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Level</label>
    <input type="text" class="form-control" name="level" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Level" required>
  </div>
  <br>
  <button type="submit" name="simpan" class="btn btn-primary">Tambah</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>