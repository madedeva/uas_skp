<html>
<head>
<title>Create</title>
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
          <a class="nav-link" id="logout" href="berkas_masuk">Berkas Masuk</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="logout.php"><b>Logout</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
	include"koneksi.php";
	$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_GET[id]'");
    $datashow = mysqli_fetch_array($data);
?>

<div class="container">
<form action="action_update.php" method="post">
<div class="form-group">
	<input type="hidden" name="id"  value="<?php echo $datashow['id']; ?>">
    <label for="exampleInputEmail1">Nama Mahasiswa</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $datashow['nama']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama mahasiswa" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username Mahasiswa</label>
    <input type="text" class="form-control" name="username" value="<?php echo $datashow['username']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan username mahasiswa" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="password" value="<?php echo $datashow['password']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Level</label>
    <input type="text" class="form-control" name="level" value="<?php echo $datashow['level']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Level" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Poin</label>
    <input type="number" class="form-control" name="poin" value="<?php echo $datashow['poin']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Level" required>
  </div>
  <br>
  <button type="submit" name="update" class="btn btn-primary">Simpan</button>
</form>
</div>
</body>
</html>