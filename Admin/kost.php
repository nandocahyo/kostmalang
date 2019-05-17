<h2>Data Kost</h2>
 <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
 
 <table class="table table-bordered">
 	<thead>
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>Harga</th>
 			<th>Alamat</th>
 			<th>Foto</th>
 			<th>Deskripsi</th>
 			<th>Rekening</th>
 			<th>Aksi</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php $nomor=1; ?>
 		<?php $ambil=$koneksi->query("SELECT * FROM kost"); ?>
 		<?php while($pecah = $ambil->fetch_assoc()){ ?>
 		<tr>
 			<td><?php echo $nomor; ?></td>
 			<td><?php echo $pecah['nama_kost']; ?></td>
 			<td><?php echo $pecah['harga_kost']; ?></td>
 			<td><?php echo $pecah['alamat_kost']; ?></td>
 			<td>
 				<img src="../imgkost/<?php echo $pecah['foto_kost']; ?>" width="100px">
 			</td>
 			<td><?php echo $pecah['deskripsi_kost']; ?></td>
 			<td><?php echo $pecah['rekening_kost']; ?></td>
 			<td>
 				<a href="index.php?halaman=hapuskost&id=<?php echo $pecah['id_kost']; ?>" class="btn-danger btn">Hapus</a>
 				<a href="index.php?halaman=ubahkost&id=<?php echo $pecah['id_kost']; ?>" class="btn-warning btn">Edit</a>
 			</td>
 		</tr>
 		<?php $nomor++; ?>
 		<?php } ?>

 	</tbody>
 </table>
 <a href="index.php?halaman=tambahkost" class="btn btn-primary">Tambah Kost</a> 