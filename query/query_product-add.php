<?php
include '../database.php';
session_start();
if(isset($_POST['namaproduk'])){
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $product = mysqli_query($conn, "INSERT INTO tb_produk (nama_produk,harga,stok,kategori) VALUES('$namaproduk','$harga','$stok','$kategori')");

    if($product){
        header("Location: " . $_GET['continue']);
        }
        else{
            $_SESSION['message'] = array(
                'type' => 'info',
                'message' => 'Maaf! Ada yang salah.'                   
            );
        }
}
?>