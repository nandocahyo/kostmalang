<h2>Detail Booking</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM booking JOIN customer ON booking.id_customer=customer.id_customer WHERE booking.id_booking='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

<pre><?php print_r($detail); ?></pre>

<strong><?php echo $detail['nama_cus']; ?></strong> <br>
<p>
	<?php echo $detail['telepon_cus']; ?> <br>
	<?php echo $detail['email_cus']; ?>
</p>

<p>
	Tanggal : <?php echo $detail['tanggal_booking']; ?> <br>
	Total : <?php echo $detail['total_booking']; ?>
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kost</th>
			<th>Harga</th> 
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM booking_kost JOIN kost ON booking_kost.id_kost=kost.id_kost WHERE booking_kost.id_booking='$_GET[id]'"); ?>
		<?php while ($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_kost']; ?></td>
			<td><?php echo $pecah['harga_kost']; ?></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>