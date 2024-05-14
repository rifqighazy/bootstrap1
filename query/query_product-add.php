<?php
include '../database.php';
session_start();
if(isset($_POST['namaproduk'])){
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $product = "INSERT INTO `tb_product` (`name`,`category`,`price`,`stock`) VALUES('$namaproduk','$kategori','$harga','$stok');";
    $insert = mysqli_query($conn, $product);

    if($insert){
        header('Location: ../index.php?page=list');
        }
        else{
            $_SESSION['message'] = array(
                'type' => 'danger',
                'message' => 'Data gagal disimpan'.mysqli_error($conn)                   
            );
            header('Location: ../index.php?page=add');
        }
}
?>