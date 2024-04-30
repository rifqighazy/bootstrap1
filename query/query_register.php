<?php 
    include '../database.php';
    session_start();
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO `tb_user` (`username`,`password`,`is_active`)
        VALUES ('$username',md5('$password'),'1');";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
                if($row['is_active'] == 1){
                    $_SESSION['username'] = $row['username'];
                    echo "<script>alert('Register Success')</script>";
                    header('Location: ../login.php');
                }else{
                    // Show flashdata
                    $_SESSION['message'] = array(
                        'type' => 'info',
                        'message' => 'Maaf! Akun anda belum aktif.'                   
                    );
                }
            }
        } else {
            // Show flashdata
            $_SESSION['message'] = array(
                'type' => 'warning',
                'message' => 'Maaf! Username atau Password Anda Salah.'                   
            );
        }
    }
    header('Location: ../login.php');
?>