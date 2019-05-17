<?php

$ambil = $koneksi->query("SELECT * FROM customer WHERE id_customer='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM customer WHERE id_customer='$_GET[id]'");

echo "<script>alert('Data Customer Terhapus');</script>";
echo "<script>location='index.php?halaman=customer';</script>";

?>