<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
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
          <a class="nav-link" id="berkas" href="berkas_masuk.php">Berkas Masuk</a>
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
<?php 

include "koneksi.php";
 
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        echo "<b>Data yang dihapus tidak ada</b>";
    }
    else {
        $delete = mysqli_query($koneksi,"DELETE FROM user WHERE id='$_GET[id]'") or die ("Mysql Error : ".mysqli_error($mysqli));
        if($delete){
			echo '
			<div class="container">
			  <div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>Data berhasil dihapus!</strong>
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  </div>
			</div>';
        }
    }
}
?>

<br>
	<div class="container">
	<form class="cari" action="" method="post">
      <input class="form-control me-2" type="search" name="keyword" id="s_keyword" placeholder="Search" aria-label="Search">
    </form>
	</div>
	<br>
	<div class="container">
	<div class="data"></div>
	</div>

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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>