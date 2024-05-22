<?php
include '../database.php';
session_start();

if($_POST['namaproduk'] & $_POST['harga'] & $_POST['stok']){
    $id = $_POST['id'];
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $fotobaru = $_FILES['foto']['name'];
    $fotolama = $_POST['fotolama'];
    $dot = explode('.',$fotobaru);
    $ekstensi = strtolower(end($dot));
    $allowed_extension = array('png', 'jpg', 'jpeg');
    $target = 'C:xampp/htdocs/bootstrap1/assets/images/produk/';
    $target_file = $target . basename($_FILES['foto']['name']);

    if ($fotobaru !='') {
        if (file_exists($target_file)) {
            $_SESSION['message'] = array(
                'type' => 'warning',
                'message' => 'Data berhasil masuk'
            );
            header('location: ../index.php?page=edit');
    
        } else {
            if ($_FILES['foto']['name'] !='') {
                if(in_array($ekstensi, $allowed_extension) === true){
                    if($ukuran < 20000000)
                    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);
                    unlink($target . $fotolama);
                }
            }
        }

        } else {
            $updatefile = $fotolama;
            $query = "UPDATE tb_product set name='$namaproduk', price='$harga', stock='$stok', category='$kategori', image='$updatefile' where id='$id'";
            $queryrun = mysqli_query($conn, $query);

            if ($queryrun) {
                $_SESSION['message'] = array(
                        'type' => 'success',
                        'message' => 'Data berhasil masuk'
                    );
                header('location: ../index.php?page=list');
                return;
    
            } else {
                $_SESSION['message'] = array(
                    'type' => 'success',
                    'message' => 'Data berhasil masuk'
                );
                header('location: ../index.php?page=list');
            }
        }
    }
?>