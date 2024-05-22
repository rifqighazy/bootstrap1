<?php
include '../database.php';
session_start();

if (isset($_POST['namaproduk'])) {
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $foto = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    $dot = explode('.',$foto);
    $ekstensi = strtolower(end($dot));
    $allowed_extension = array('png', 'jpg', 'jpeg');
    $target = 'C:xampp/htdocs/bootstrap1/assets/images/produk/';
    $target_file = $target . basename($_FILES['foto']['name']);

    // Query for data insertion
    if ($namaproduk) {
        // Check Product
        $checkproduk = "SELECT name FROM tb_product WHERE name='$namaproduk' LIMIT 1";
        $checkproduk_run = mysqli_query($conn, $checkproduk);

        if (mysqli_num_rows($checkproduk_run) < 1) {
            if(in_array($ekstensi, $allowed_extension) === true){
                if($ukuran < 20000000){
                    move_uploaded_file($file_tmp, $target_file);
                }
            }

        $produk_query = "INSERT INTO `tb_product` (name,category,price,stock,image) VALUES('$namaproduk','$kategori','$harga','$stok','$foto');";
        $produk_query_run = mysqli_query($conn, $produk_query);

            if ($produk_query_run) {
                $_SESSION['message'] = array(
                    'type' => 'success',
                    'message' => 'Data berhasil masuk'
                );
                header('Location: ../index.php?page=list');
                exit(0);
            } else {
                $_SESSION['message'] = array(
                    'type' => 'danger',
                    'message' => 'Error'
                );
                header('Location: ../index.php?page=add');
                exit(0);
            }
            
        } else {                              
            // Notification
            $_SESSION['message'] = array(
                'type' => 'warning',
                'message' => 'Maaf! Produk sudah ada'
            );
            header('Location: ../index.php?page=add');
            exit(0);
        }
    }
}
?>