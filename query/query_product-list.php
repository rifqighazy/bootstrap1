<?php
include "database.php";
    
    $sql = "SELECT * from tb_product";
    $hasil = mysqli_query($conn, $sql);
    $no = 1;
    while($row = mysqli_fetch_assoc($hasil))
?>