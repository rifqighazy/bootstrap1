<?php
include 'database.php';
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: index.php');
    }
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        
        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
                if($row['is_active'] == 1){
                    $_SESSION['username'] = $row['username'];
                    echo "<h2>Login Success</h2>";
                    header('Location: index.php');
                } else {
                    echo '<div class="alert alert-info alert-dismissible fade show" role="alert"><strong>Maaf!</strong> Akun anda belum aktif.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                }
            }
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Maaf!</strong> Username atau Password Anda Salah.<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }
?>