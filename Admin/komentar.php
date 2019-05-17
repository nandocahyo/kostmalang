<h2>Daftar Komentar</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Telepon</th>
			<th>E-mail</th>
			<th>Pesan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM komentar"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['telpon']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td><?php echo $pecah['pesan']; ?></td>
			<td>
				<a href="index.php?halaman=hapuskomentar&id=<?php echo $pecah['nama']; ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<a href="index.php?halaman=tambahkomentar" class="btn btn-primary">Tambah Komentar</a>