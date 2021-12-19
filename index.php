<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<br>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo '
			<div class="container">
			  <div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Username atau Password Salah!</strong>
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  </div>
			</div>';
		}
	}
	?>

<div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Login <span class="font-weight-bold text-primary">e-SKP FTK</span></h5></div>
            <div class="card-body">
              <form action="cek_login.php" method="post">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
				<br>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
				<br>
                <div class="form-group">
                  <input type="submit" name="btn" value="Login" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>