<?php
include '../database.php';
session_start();

$id = $_GET['id'];

$update = "DELETE FROM tb_product WHERE id='$id'";
$hasil = mysqli_query($conn, $update);

if($hasil){
    header('Location: ../index.php?page=list');
    }
    else{
        $_SESSION['message'] = array(
            'type' => 'info',
            'message' => 'Error'                   
        );
    }

?>