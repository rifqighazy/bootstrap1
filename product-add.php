<?php
include 'menu.php'; 
?>

<div>
  <div class="card mt-2 text-center bg-body-dark">
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
      <h1 class="h2">Add Product</h1>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="query/query_product-add.php" method="post">
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
              <select class="form-select" aria-label="Default select example" name="kategori">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
          <br>
          <div class="mb-3 d-grid">
              <button type="Submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <form action="query/query_product-add.php">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mb-3 border-2">
        <div class="card-body">
          <h5 class="card-title">Tambah Produk</h5>
          <p class="card-text">Jika ingin menambah produk. Tekan tombol dibawah.</p>
              <form action="query/query_product-add.php" method="post">
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
                    <select class="form-select" aria-label="Default select example" name="kategori">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                <br>
                <div class="mb-3 d-grid">
                    <button type="Submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>