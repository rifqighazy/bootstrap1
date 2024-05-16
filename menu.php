<?php
include 'database.php';
include 'product-add.php';
$produk = mysqli_query($conn, "SELECT * FROM tb_product");
?>

<div class="container">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-dark border-bottom">
        <h1 class="h2">Add Product</h1>
    </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<div class="container">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Kategori</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($produk as $p) : ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $p['name'] ?></td>
                    <td><?= $p['price'] ?></td>
                    <td><?= $p['stock'] ?></td>
                    <td><?= $p['category'] ?></td>
                    <td>
                        <a class="btn btn-info badge"href="index.php?page=edit">Edit</a>
                        <a class="btn btn-danger badge"href="index.php?page=delete">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>