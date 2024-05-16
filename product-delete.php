<div>
  <div class="card mt-2 text-center">
    <div class="card-header">
      <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
          <a class="nav-link active" href="index.php?page=add">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=edit">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=delete">Link</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div
      class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-dark border-bottom">
      <h1 class="h2">Delete Product</h1>
  </div>
</div>

<div class="row">
    <div class="card mb-3 border-dark">
        <div class="card-body">
            <h5 class="card-title">Hapus Produk</h5>
            <p class="card-text">Jika ingin menghapus produk. Tekan tombol dibawah.</p>
            <?php
                if(isset($_SESSION['message'])){
                echo "<div class='alert alert-".$_SESSION['message']['type']." alert-dismissible fade show' role='alert'>".$_SESSION['message']['message']." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                unset($_SESSION['message']);
                }
            ?>
            <div class="card-body">
                <form action="query/query_product-delete.php" method="post">
                    <div class="mb-3">
                        <label for="namaproduk">Nama Produk</label>
                        <input 
                            type="text"
                            class="form-control"
                            name="namaproduk"
                            placeholder="Nama Produk"
                            required>
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Hapus Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Modal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Apakah anda yakin menghapus produk
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
        <form action="query/query_product-delete.php" method="post">
          <button type="submit" class="btn btn-danger" name="delete-product">YES</button>
        </form>
      </div>
    </div>
  </div>
</div>