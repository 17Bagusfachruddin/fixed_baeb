<?php 
session_start();
$id_produk=$_GET["id"];
unset($_SESSION["product_summary"][$id_produk]);

echo "<script>alert('produk dihapus dari keranjang'); </script>";
echo "<script>location='../cart.php';</script>";
?>