<table class="table table-striped table-bordered" border="1px">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Nomor Induk Mahasiswa</th>
      <th scope="col">Email</th>
      <th scope="col">Level</th>
      <th scope="col">Total Poin</th>
	  <th width="20%" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'koneksi.php';
		$nomor = 0;
		$data = mysqli_query($koneksi,"SELECT * FROM user WHERE level = 'user'");
		while($show = mysqli_fetch_array($data)){
			$nomor++;
	?>
    <tr>
		<td><?php echo $show['nama'];?></td>
    <td><?php echo $show['password'];?></td>
		<td><?php echo $show['username'];?></td>
		<td><?php echo $show['level'];?></td>
    <td><?php echo $show['poin'];?></td>
		<td>
			<a href="update.php?id=<?php echo $show['id'];?>"><button type="button" class="btn btn-success">Edit</button></a>
			<a href="delete.php?id=<?php echo $show['id'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            <a href="tambah_skp.php"><button type="button" class="btn btn-primary">Input SKP</button></a>
		</td>
    </tr>
	<?php } ?>
  </tbody>
</table>