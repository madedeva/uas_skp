<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="style.css">
		
    </head>
<body>
<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
<div class="nav">
<ul>
  <li><a class="active" href="#home">Daftar Akun</a></li>
  <li><a href="create.php">Tambah Akun</a></li>
  <li><a href="#">Mahasiswa</a></li>
  <li><a href="#">Admin</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
</div>
<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
<p>Daftar Akun Mahasiswa</p>

<table class="tab" id="mahasiswa" border="1px">
	<thead>
		<tr>
		<th width="130">Nama</th>
        <th width="85">Username</th>
        <th width="38">Password</th>
		<th width="38">Level</th>
        <th width="38">Action</th>
</tr>
</thead>
<tbody>
	<?php
		$nomor = 0;
		$data = mysqli_query($koneksi,"SELECT * FROM user WHERE level = 'user'");
		while($show = mysqli_fetch_array($data)){
			$nomor++;
	?>
<tr>
<td><?php echo $show['nama'];?></td>
<td><?php echo $show['username'];?></td>
<td><?php echo $show['password'];?></td>
<td><?php echo $show['level'];?></td>
<td>
    <a href="update.php?id=<?php echo $show['id'];?>"><input type="button" class="button1" value="Edit"></a>
    <a href="delete.php?id=<?php echo $show['id'];?>"><input type="button" class="button2" value="Delete"></a>
</td>
</tr>
<?php } ?>
	</tbody>

</body>
</html>