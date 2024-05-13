<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-dark border-bottom">
    <h1 class="h2">Add New</h1>
</div>
<div>
    <div class="row">
      <div class="card mb-3 border-3">
        <div class="card-body">
          <h5 class="card-title">Tambah Produk</h5>
          <p class="card-text">Jika ingin menambah produk. Tekan tombol dibawah.</p>
          <p class="d-inline-flex gap-1">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Tambah Produk</button>
          </p>
          <?php
            if(isset($_SESSION['message'])){
              echo "<div class='alert alert-".$_SESSION['message']['type']." alert-dismissible fade show' role='alert'>".$_SESSION['message']['message']." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
              unset($_SESSION['message']);
            }
          ?>
          <div class="collapse" id="collapseExample">
            <div class="card card-body border-dark">
              <form 
                method="post"
                action='query_product-add.php?continue=<?php echo $_GET['continue'];?>'>

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
                    <label for="harga">Harga</label>
                    <input 
                        type="number"
                        class="form-control"
                        name="harga"
                        placeholder="Harga"
                        required>
                </div>
                <div class="mb-3">
                    <label for="stok">Stock</label>
                    <input 
                        type="number"
                        class="form-control"
                        name="stok"
                        placeholder="Stock"
                        required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" name="kategori">
                        <option>Makanan Ringan</option>
                        <option>Makanan Berat</option>
                        <option>Minuman</option>
                    </select>
                </div>
                <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="Submit" class="btn btn-primary" name="addproduct">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Tambah Produk</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <button type="button" class="btn btn-primary" name="add" data-bs-toggle="modal" data-bs-target="#myModal">Submit</button>
        </div>
      </div>
    </div>
    </div>
</div>

<!-- The Modal Add Product -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Produk</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="#" method="post">
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
                <label for="harga">Harga</label>
                <input 
                    type="number"
                    class="form-control"
                    name="harga"
                    placeholder="Harga"
                    required>
            </div>
            <div class="mb-3">
                <label for="stok">Stock</label>
                <input 
                    type="number"
                    class="form-control"
                    name="stok"
                    placeholder="Stock"
                    required>
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-select" name="kategori">
                    <option>Makanan Ringan</option>
                    <option>Makanan Berat</option>
                    <option>Minuman</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="Submit" class="btn btn-primary" data-bs-dismiss="modal" name="addproduct">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>