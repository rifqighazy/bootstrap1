<?php
require 'database.php';

$full_name = $_POST["name"];
$username = $_POST["username"];
$nomor_telepon = $_POST["telepon"];
$password = $_POST["password"];


$sql = "INSERT INTO `tb_user` (`full_name`,`username`,`password`,`nomor_telepon`,`is_active`)
VALUES ('$full_name','$username','$password','$nomor_telepon','1');";

if (mysqli_query($conn, $sql)) {
  header('Location: index.php');
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>