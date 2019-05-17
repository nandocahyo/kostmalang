<h2>Data Customer</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM customer"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_cus']; ?></td>
			<td><?php echo $pecah['email_cus']; ?></td>
			<td><?php echo $pecah['telepon_cus']; ?></td>
			<td>
				<a href="index.php?halaman=hapuscustomer&id=<?php echo $pecah['id_customer']; ?>" class="btn btn-danger">Hapus</a>
				<a href="index.php?halaman=ubahcustomer&id=<?php echo $pecah['id_customer']; ?>" class="btn btn-warning">Edit</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahcustomer" class="btn btn-primary">Tambah Customer</a> 
