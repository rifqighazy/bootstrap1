<?php
include '../database.php';
session_start();
if(isset($_POST['delete-product'])){
    $id = $_GET['id']
    $namaproduk = $_POST['namaproduk'];

    $hapus = mysqli_query($conn, "SELECT * FROM tb_product WHERE id='$id' AND name='$namaproduk'");
    $delete = mysqli_fetch_array($hapus);

    $deletenow = "DELETE FROM tb_product WHERE id='$id' and name='$namaproduk'";

    if($deletenow){
        header('Location: ../index.php?page=list');
        }
        else{
            $_SESSION['message'] = array(
                'type' => 'danger',
                'message' => 'Data gagal disimpan'.mysqli_error($conn)                   
            );
            header('Location: ../index.php?page=delete');
        }
}
?>