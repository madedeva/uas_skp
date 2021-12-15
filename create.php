<html>
<head>
<title>Create</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <form action="action_create.php" method="post">
    <p>Tambah Akun Mahasiswa</p>
    <p>
        Nama : <input type="text" name="nama" required> <br>
        Username: <input type="text" name="username" required> <br>
        Password :  <input type="text" name="password" required> <br>
        Level :  <input type="text" name="level" required> <br>
    </p>
    <input type="submit" name="simpan" value="Simpan">
    </form>
    
</body>
</html>