<html>
<head>
	<title>Mahasiswa</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">e-SKP FTK | Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		<li class="nav-item" id="logout">
          <a class="nav-link" href="logout.php"><b>Logout</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>

<div class="container">
<div class="jumbotron">
  <h1 class="display-4">Selamat Datang di Sistem e-SKP FTK</h1>
  <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <hr class="my-4">
<div class="card" style="width: 18rem;">
  <div class="card-header">
    Informasi Mahasiswa
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nama Mahasiswa</li>
    <li class="list-group-item">NIM</li>
    <li class="list-group-item">Poin Yang Diperloeh <h4>poin</h4><a href="#" class="btn btn-primary">Rincian</a></li>
  </ul>
</div>
<br>

<?php
include"koneksi.php";
 
if(isset($_POST['tambah'])){
$berkas = $_POST['berkas'];
 
$tambah = mysqli_query($koneksi, "INSERT INTO berkas SET berkas='$berkas'") or die ("berkas gagal disimpan! ".mysqli_error($koneksi));
 
if ($tambah) {
  echo '
  <div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil menambahkan berkas!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>';
} else {
  echo '
  <div class="container">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Gagal menambahkan berkas!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>';
    }
}
?>
<div class="container">
  <h3>Tambahkan Portfolio</h3>
  <form action="halaman_user.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlFile1">Tambahkan Berkas Portfolio</label>
    <input type="file" name="berkas" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div>
  <input class="btn btn-primary" name="tambah" type="submit" value="Tambah">
  </div>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>