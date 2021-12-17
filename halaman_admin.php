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
			margin-left: 50px;
		}
		.data{
			margin-left: 50px;
			margin-right: 50px;
		}
	</style>

<body>
<?php 
	session_start();
 
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
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
          <a class="nav-link" id="logout" href="logout.php"><b>Logout</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
	<form class="cari" action="" method="post">
      <input class="form-control me-2" type="search" name="keyword" id="s_keyword" placeholder="Search" aria-label="Search">
    </form>
	<br>
	<div class="data"></div>

	<!-- Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


	<script>
		
		$(document).ready(function(){
		load_data();
		function load_data(keyword)
		{
			$.ajax({
				method:"POST",
				url:"data.php",
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