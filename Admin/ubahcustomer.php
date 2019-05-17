<h2>Ubah Customer</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM customer WHERE id_customer='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

echo "<pre>";
print_r($pecah);
echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
 	<div class="form-group">
 		<label>Nama</label>
 		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_cus'] ?>">
 	</div>

 	<div class="form-group">
 		<label>E-mail</label>
 		<input type="text" class="form-control" name="email" value="<?php echo $pecah['email_cus'] ?>">
 	</div>

 	<div class="form-group">
 		<label>Telepon</label>
 		<input type="text" class="form-control" name="telepon" value="<?php echo $pecah['telepon_cus'] ?>">
 	</div>

 	
 	<button class="btn btn-primary" name="ubah">Ubah</button>
 </form>

 <?php
  if (isset ($_POST['ubah']))
  {
  	
  		$koneksi->query("UPDATE customer SET email_cus='$_POST[email]',nama_cus='$_POST[nama]',telepon_cus='$_POST[telepon]' WHERE id_customer='$_GET[id]'");
 
  	echo "<script>alert('data customer telah diubah');</script>";
  	echo "<script>location='index.php?halaman=customer';</script>";
  }
  ?>