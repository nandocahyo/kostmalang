<?php

$ambil = $koneksi->query("SELECT * FROM kost WHERE id_kost='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotokost = $pecah['foto_kost'];
if (file_exists("../imgkost/$fotokost"))
{
	unlink("../imgkost/$fotokost");
}

$koneksi->query("DELETE FROM kost WHERE id_kost='$_GET[id]'");

echo "<script>alert('Kost Terhapus');</script>";
echo "<script>location='index.php?halaman=kost';</script>";

?>