<h2>Ubah Kost</h2>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<?php
$ambil=$koneksi->query("SELECT * FROM kost WHERE id_kost='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

 <form method="post" enctype="multipart/form-data">
 	<div class="form-group">
 		<label>Nama</label>
 		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_kost'] ?>">
 	</div>

 	<div class="form-group">
 		<label>Harga</label>
 		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_kost'] ?>">
 	</div>

 	<div class="form-group">
 		<label>Alamat</label>
 		<input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat_kost'] ?>">
 	</div>

 	<div class="form-group">
 		<label>Foto</label> 
 		<img src="../imgkost/<?php echo $pecah['foto_kost'] ?>" width="200">
 	</div>
 	<div class="form-group">
 		<label>Ubah Foto</label>
 		<input type="file" name="foto" class="form-control">
 	</div>

 	<div class="form-group">
 		<label>Deskripsi</label>
 		<textarea class="ckeditor" id="ckedtor" name="deskripsi" rows="10"> <?php echo $pecah['deskripsi_kost']; ?></textarea>
 	</div>

  <div class="form-group">
    <label>Rekening</label>
    <input type="text" class="form-control" name="rekening" value="<?php echo $pecah['rekening_kost'] ?>">
  </div>

 	<button class="btn btn-primary" name="ubah">Ubah</button>
 </form>

  <?php
  if (isset ($_POST['ubah']))
  {
  	$namafoto =$_FILES['foto']['name'];
  	$lokasifoto = $_FILES['foto']['tmp_name'];
  	//jika foto dirubah
  	if (!empty($lokasifoto))
  	{
  		move_uploaded_file($lokasifoto, "../imgkost/$namafoto");

  		$koneksi->query("UPDATE kost SET nama_kost='$_POST[nama]',harga_kost='$_POST[harga]',alamat_kost='$_POST[alamat]',foto_kost='$namafoto',deskripsi_kost='$_POST[deskripsi]' WHERE id_kost='$_GET[id]'");
  	}
  	else
  	{
  		$koneksi->query("UPDATE kost SET nama_kost='$_POST[nama]',harga_kost='$_POST[harga]',alamat_kost='$_POST[alamat]',deskripsi_kost='$_POST[deskripsi]' WHERE id_kost='$_GET[id]'");
  	}
  	echo "<script>alert('data kost telah diubah');</script>";
  	echo "<script>location='index.php?halaman=kost';</script>";
  }
  ?>