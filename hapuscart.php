<?php
session_start();
$id_kost = $_GET["id"];
unset($_SESSION["cart"][$id_kost]);

echo "<script>alert('Kost Telah Terhapus dari Daftar');</script>";
echo "<script>location='cart.php';</script>";

?>