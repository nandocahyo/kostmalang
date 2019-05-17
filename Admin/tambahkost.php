<h2>Tambah Kost</h2>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

 <form method="post" enctype="multipart/form-data">
 	<div class="form-group">
 		<label>Nama</label>
 		<input type="text" class="form-control" name="nama">
 	</div>

 	<div class="form-group">
 		<label>Harga</label>
 		<input type="number" class="form-control" name="harga">
 	</div>

 	<div class="form-group">
 		<label>Alamat</label>
 		<input type="text" class="form-control" name="alamat">
 	</div>

 	<div class="form-group">
 		<label>Foto</label> 
 		<input type="file" class="form-control" name="foto">
 	</div>

 	<div class="form-group">
 		<label>Deskripsi</label>
 		<textarea class="ckeditor" id="ckedtor" name="deskripsi"></textarea>
 	</div>

 	<div class="form-group">
 		<label>Rekening Kost</label>
 		<input type="text" class="form-control" name="rekening">
 	</div>

 	<button class="btn btn-primary" name="save">Simpan</button>
 	
 </form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../imgkost/".$nama);
	$koneksi->query("INSERT INTO kost (nama_kost,harga_kost,alamat_kost,foto_kost,deskripsi_kost,rekening_kost)
	VALUES('$_POST[nama]','$_POST[harga]','$_POST[alamat]','$nama','$_POST[deskripsi]','$_POST[rekening]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kost'>";
}
?>
