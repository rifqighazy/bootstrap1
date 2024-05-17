<div class="container">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-dark border-bottom">
    <h1 class="h2">Add Product</h1>
  </div>
</div>

<div class="container">
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Produk</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <th scope="col">Kategori</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <?php
    include "database.php";
    $sql = "SELECT * from tb_product";

    $hasil = mysqli_query($conn, $sql);
    $no = 0;
    while ($data = mysqli_fetch_array($hasil)) {
      $no++;
      $id = $data['id']
    ?>
    <tbody>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['price']; ?></td>
        <td><?php echo $data['stock']; ?></td>
        <td><?php echo $data['category']; ?></td>
        <td>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="index.php?page=edit&id<?php echo $id ?>">  
              <button class="btn btn-warning" type="button">Edit</button>
            </a>
            <a href="query/query_product-delete.php?id=<?php echo $id ?>" onclick="return confirm('Anda yakin ingin menghapus produk?')">
              <button class="btn btn-danger" type="submit" name="delete">Delete</button>
            </a>
          </div>
        </td>
      </tr>
    </tbody>
    <?php
    }
    ?>
  </table>
</div>

<?php
if(isset($_SESSION['message'])){
    echo "<div class='alert alert-".$_SESSION['message']['type']." alert-dismissible fade show' role='alert'>".$_SESSION['message']['message']." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    unset($_SESSION['message']);
}
?>