<?php
include '../database.php';
session_start();

// query edit harga
if(isset($_POST['namaproduk'])){
    $namaproduk = $_POST['namaproduk'];
    $harga = $_POST['harga'];

    $price = mysqli_query($conn, "SELECT * FROM tb_product WHERE name='$namaproduk' AND price='$harga'");
    $editharga = mysqli_fetch_array($price);


    $updateharga = "UPDATE tb_product SET price='$harga' WHERE name='$namaproduk'";
    $newprice = mysqli_query($conn, $updateharga);

    if($newprice){
        header('Location: ../index.php?page=list');
        }
        else{
            $_SESSION['message'] = array(
                'type' => 'danger',
                'message' => 'Data gagal disimpan'.mysqli_error($conn)                   
            );
            header('Location: ../index.php?page=edit');
        }
}

// query edit stok masuk
if(isset($_POST['namaproduk'])){
    $namaproduk = $_POST['namaproduk'];
    $stokmasuk = $_POST['stokmasuk'];

    $stock = mysqli_query($conn, "SELECT * FROM tb_product WHERE name='$namaproduk'");
    $editstokin = mysqli_fetch_array($stock);

    $stocknow = $editstokin['stock'];
    $stockinnew = $stocknow+$stokmasuk;

    $updatestok = "UPDATE tb_product set stock = stock + '$stokmasuk' WHERE name = '$namaproduk'";
    $newstockin = mysqli_query($conn, $updatestok);

    if($newstockin){
        header('Location: ../index.php?page=list');
        }
        else{
            $_SESSION['message'] = array(
                'type' => 'danger',
                'message' => 'Data gagal disimpan'.mysqli_error($conn)                   
            );
            header('Location: ../index.php?page=edit');
        }
}

?>