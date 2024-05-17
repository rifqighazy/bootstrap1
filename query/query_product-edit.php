<?php
include '../database.php';
session_start();

if($_POST['namaproduk'] & $_POST['harga'] & $_POST['stok']){
    $id = $_POST['id'];
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $update = "UPDATE tb_product SET name='$namaproduk', price='$harga', stock='$stok', category='$kategori' WHERE id='$id'";
    $hasil = mysqli_query($conn, $update);

    if($hasil){
        $_SESSION['message'] = array(
            'type' => 'info',
            'message' => 'Data berhasil di edit'                   
        );
        header('Location: ../index.php?page=list');
        }
        else{
            $_SESSION['message'] = array(
                'type' => 'info',
                'message' => 'error'                   
            );
            header('Location: ../index.php?page=edit');
        }
}
?>