<?php

$ambil = $koneksi->query("SELECT * FROM komentar WHERE nama='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


$koneksi->query("DELETE FROM komentar WHERE nama='$_GET[id]'");

echo "<script>alert('Komentar Terhapus');</script>";
echo "<script>location='index.php?halaman=komentar';</script>";

?>