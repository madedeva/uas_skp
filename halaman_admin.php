<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
	<style>
		.cari{
			width: 250px;
		}
	</style>

<body>
<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">e-SKP FTK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Daftar Akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Tambah Akun</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Mahasiswa</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="logout.php"><b>Logout</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
	<form class="cari" action="" method="post">
      <input class="form-control me-2" type="search" name="keyword" id="s_keyword" placeholder="Search" aria-label="Search">
    </form>
	<div class="data"></div>

<br>
<div class="data" id="container">
<table class="table" border="1px">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Level</th>
	  <th scope="col">Action</th>
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
			<a href="update.php?id=<?php echo $show['id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
			<a href="delete.php?id=<?php echo $show['id'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
		</td>
    </tr>
	<?php } ?>
  </tbody>
</table>
</div>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script>
		
		/* var keyword = document.getElementById('keyword');
		var tombolCari = document.getElementById('tombol-cari');
		var container = document.getElementById('container');

		/*tombolCari.addEventListener('click', function(){
			alert('berhasil');
		}); 

		keyword.addEventListener('keyup', function(){
			

			/** object ajax 

			var xhr = new XMLHttpRequest();

			/**cek kesiapan ajax 
			xhr.onreadystatechange = function(){
				if(xhr.readyState == 4 && xhr.status == 200){
					container.innerHTML = xhr.responseText;
				}
			}

			xhr.open('GET', 'ajax/mahasiswa.php', true);
			xhr.send();



		}); */
	$(document).ready(function(){
	load_data();
	function load_data(keyword)
		{
			$.ajax({
				method:"POST",
				url:"maasiswa.php",
				data: {keyword:keyword},
				success:function(hasil)
				{
					$('.data').html(hasil);
				}
			});
	 	}
		$('#s_keyword').keyup(function(){
    		var keyword = $("#s_keyword").val();
			load_data(keyword);
		});
	});


	</script>

</body>
</html>