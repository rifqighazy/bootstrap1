<div
    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-dark border-bottom">
    <h1 class="h2">Delete Product</h1>
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
                </form>
            </div>
        </div>
    </div>
</div>