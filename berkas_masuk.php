<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
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
		<li class="nav-item">
          <a class="nav-link" id="logout" href="#">Berkas Masuk</a>
        </li>
        </li>
		<li class="nav-item">
          <a class="nav-link" id="logout" href="logout.php"><b>Logout</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
	<div class="container">

    <table class="table table-striped table-bordered" border="1px">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Berkas</th>
	  <th width="20%" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'koneksi.php';
		$nomor = 0;
		$data = mysqli_query($koneksi,"SELECT * FROM berkas");
		while($show = mysqli_fetch_array($data)){
			$nomor++;
	?>
    <tr>
	<td><?php echo $show['id'];?></td>
    <td><?php echo $show['berkas'];?></td>
	<td>
		<a href="#"><button type="button" class="btn btn-success">Validasi</button></a>
		<a href="#"><button type="button" class="btn btn-danger">Hapus</button></a>
	</td>
    </tr>
	<?php } ?>
  </tbody>
</table>

    </div>

</body>
</html>