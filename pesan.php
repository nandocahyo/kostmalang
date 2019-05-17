<?php
session_start();
//mendapatkan id kost dari url
$id_kost = $_GET['id'];


//menambah kost yang dipesan
if (isset($_SESSION['cart'][$id_kost]))
{
	$_SESSION['cart'][$id_kost] += 1;
}
else 
{
	$_SESSION['cart'][$id_kost] = 1;
}


//menuju link cart
echo "<script>alert('Kost Masuk Daftar Booking');</script>";
echo "<script>location='cart.php';</script>";
?>