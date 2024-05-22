<?php
include 'database.php';

$id = $_GET['id'];
$target = 'C:xampp/htdocs/bootstrap1/assets/images/produk/';

	$show = mysqli_query($conn, "SELECT * FROM tb_product WHERE id = '$id'");
	if(mysqli_num_rows($show) == 0){
		echo "<script>window.history.back()</script>";
	}
	else{
		$data = mysqli_fetch_assoc($show);
  }
?>