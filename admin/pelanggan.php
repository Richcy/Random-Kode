<?php include 'koneksi.php'; ?>

<h2>Data Pelanggan</h2>

<table class = "table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Password</th>
			<th>Alamat</th>
			<th>Nomor HP</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php  $ambil = $sql->query("SELECT * FROM user")?>
		<?php while($pecah = $ambil ->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['id'] ?></td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['password']; ?></td>
			<td><?php echo $pecah['alamat'];?></td>
			<td><?php echo $pecah['nomor_hp'];?></td>
			<td>
				<a href="" class = "btn btn-danger">hapus</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>