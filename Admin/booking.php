<h2>Data Booking</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Customer</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM booking JOIN customer ON booking.id_customer=customer.id_customer"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_cus']; ?></td>
			<td><?php echo $pecah['tanggal_booking']; ?></td>
			<td><?php echo $pecah['total_booking']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_booking']; ?>" class="btn btn-info">Detail</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
	
</table>