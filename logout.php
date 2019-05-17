<?php
session_start();

//destroy pelanggan session
session_destroy();

echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";
?>