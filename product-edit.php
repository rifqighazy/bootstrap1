<?php
include 'database.php';

    $sql = "SELECT * from tb_product";
    $hasil = mysqli_query($conn, $sql);
    $p = mysqli_fetch_array($hasil);
    
    $id = $p['id'];
    $produk = $p['name'];
    $harga = $p['price'];
    $stok = $p['stock'];
?>

<div class="container">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-dark border-bottom">
        <h1 class="h2">Edit Product</h1>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mb-3 border-2">
        <div class="card-body">
          <h5 class="card-title">Tambah Produk</h5>
          <p class="card-text">Jika ingin menambah produk. Isi form dibawah ini!</p>
              <form action="query/query_product-edit.php" method="post">
              <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="mb-3">
                    <label for="namaproduk">Nama Produk</label>
                    <input 
                        type="text"
                        class="form-control"
                        name="namaproduk"
                        placeholder="Nama Produk"
                        value="<?php echo $produk ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="harga">Harga</label>
                    <input 
                        type="number"
                        class="form-control"
                        name="harga"
                        placeholder="Harga"
                        value="<?php echo $harga ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="stok">Stock</label>
                    <input 
                        type="number"
                        class="form-control"
                        name="stok"
                        placeholder="Stock"
                        value="<?php echo $stok ?>"
                        required>
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" name="kategori" aria-label="Default select example" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Makanan Ringan">Makanan Ringan</option>
                        <option value="Makanan Berat">Makanan Berat</option>
                        <option value="Minuman">Minuman</option>
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