<div class="container mt-3">
  <h2>Table Head Colors</h2>
  <p>You can use any of the contextual classes to only add a color to the table header:</p>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>No.</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Kategori</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include 'database.php';
      $dataproduk = mysqli_query($conn,"SELECT * FROM tb_produk");
      
      $nomor = 1;

      while($data = mysqli_fetch_array($dataproduk)){
        $namaproduk = $data['nama_produk'];
        $harga = $data['harga'];
        $stok = $data['stok'];
        $kategori = $data['kategori'];

      ?>
      <tr>
        <td><?=$nomor++;?></td>
        <td><?=$namaproduk;?></td>
        <td><?=$harga;?></td>
        <td><?=$stok;?></td>
        <td><?=$kategori;?></td>
      </tr>
      <?php
      };

      ?>
    </tbody>
  </table>
</div>