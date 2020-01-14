<?php

include 'koneksi.php';
	if (isset($_POST['add']))
{

	$id_user = $_POST['id_user'];
    $id_cat = $_POST['id_cate'];
	$prod_id =$_POST['id_produ'];
	$date = date('Y-m-d');
	$stok = $_POST['quantity'];
	$sts = "BELUM";
	$ttl = $_POST['ttl'];
	
		$query = "INSERT INTO orders(id_user, id_product, order_date, jumlah, sts_order, ttl_harga)VALUES ('$id_user', '$prod_id', '$date', '$stok', '$sts', '$ttl')";
		$result = mysqli_query($koneksi, $query);
		// var_dump($query);
		//<a href='cart.php?id=".$id."&action=add'>
		echo "<script>window.location='../cart.php?id=".$prod_id."&action=view'</script>";
		// karek jukuk id ne product yaopo?

}
?>