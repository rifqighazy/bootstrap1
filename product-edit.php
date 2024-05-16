<?php
include 'database.php';

$id = isset($_GET['id']) ? ($_GET['id']) : false;

$edit = mysqli_query($conn, "SELECT * FROM tb_product WHERE id='$id'");
$p = mysqli_fetch_array($edit);

?>

<div class="container">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-dark border-bottom">
        <h1 class="h2">Edit Product</h1>
    </div>
</div>


<div class="container">
    <div class="row">
    <!-------- nav tab ---------->
        <div class="col-md-2 border border-bottom-0 border-3">
            <div class="nav d-flex nav-pills me-3 mt-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <!----- tab edit harga ------>
                <button 
                    class="nav-link active flex-fill text-start mb-2" 
                    id="v-pills-home-tab" 
                    data-bs-toggle="pill" 
                    data-bs-target="#v-pills-home" 
                    type="button" 
                    role="tab" 
                    aria-controls="v-pills-home" 
                    aria-selected="true">
                        Edit Harga
                </button>

            <!----- tab edit stok ------>
                <button 
                    class="nav-link flex-fill text-start mb-2" 
                    id="v-pills-profile-tab" 
                    data-bs-toggle="pill" 
                    data-bs-target="#v-pills-profile" 
                    type="button" 
                    role="tab" 
                    aria-controls="v-pills-profile" 
                    aria-selected="false">
                        Edit Stok
                </button>

            <!----- tab edit kategori ------>
                <button 
                    class="nav-link flex-fill text-start mb-2" 
                    id="v-pills-messages-tab" 
                    data-bs-toggle="pill" 
                    data-bs-target="#v-pills-messages" 
                    type="button" 
                    role="tab" 
                    aria-controls="v-pills-messages" 
                    aria-selected="false">
                        Edit Kategori
                </button>
            </div>
        </div>
        
    <!-------- tab panes ---------->
        <div class="col border-bottom border-3">
            <div class="tab-content" id="v-pills-tabContent">
            <!----- pane edit harga ------>
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
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
                        <div class="mb-4">
                            <label for="harga">Harga</label>
                            <input 
                                type="number"
                                class="form-control"
                                name="harga"
                                placeholder="Harga"
                                required>
                        </div>
                    </form>
                </div>

            <!----- pane edit stok ------>
                <div class="tab-pane fade mb-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                    <div class="accordion" id="accordionExample">
                    <!-- form edit stok masuk -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Edit Stok Masuk
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
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
                                        <div class="mb-2">
                                            <label for="stok">Stock</label>
                                            <input 
                                                type="number"
                                                class="form-control"
                                                name="stok"
                                                placeholder="Stock"
                                                required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <!-- form edit stok keluar -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Edit Stok Keluar
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
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
                                        <div class="mb-2">
                                            <label for="stok">Stock</label>
                                            <input 
                                                type="number"
                                                class="form-control"
                                                name="stok"
                                                placeholder="Stock"
                                                required>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!----- pane edit kategori ------>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
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
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select" aria-label="Default select example" name="kategori">
                            <option selected disabled>Pilih Kategori</option>
                            <option>Makanan Ringan</option>
                            <option>Makanan Berat</option>
                            <option>Minuman</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>