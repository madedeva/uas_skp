<html>
<head>
<title>Create</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	include"koneksi.php";
	$data = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$_GET[id]'");
    $datashow = mysqli_fetch_array($data);
?>

<form action="action_update.php" method="post">
<p>Ubah Akun Mahasiswa</p>
<p>
	<input type="hidden" name="id"  value="<?php echo $datashow['id']; ?>">
Nama : <input type="text" name="nama"  value="<?php echo $datashow['nama']; ?>"> <br>
Username: <input type="text" name="username" value="<?php echo $datashow['username']; ?>"> <br>
Password: <input type="text" name="password" value="<?php echo $datashow['password']; ?>"> <br>
Level: <input type="text" name="level" value="<?php echo $datashow['level']; ?>"> <br>
</p>
 <input type="submit" name="update" value="EDIT">
</form>
</body>
</html>