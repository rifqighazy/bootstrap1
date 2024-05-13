<?php
include '../database.php';
session_start();
if(isset($_POST['namaproduk']) && isset($_POST['harga'])){
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $product = "INSERT INTO `tb_produk` (`nama_produk`,`harga`,`stok`,`kategori`) VALUES('$namaproduk','$harga','$stok','$kategori');";

    $insert = mysqli_query($conn, $product);

    if($insert){
        header('location: ../index.php?page=list');
        }
        else{
            $_SESSION['message'] = array(
                'type' => 'danger',
                'message' => 'Data gagal disimpan'.mysqli_error($conn)                   
            );
            header('location: ../index.php?page=add');
        }
}
?>