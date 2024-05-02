<?php 
    include '../database.php';
    session_start();
    if(isset($_POST['username']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $telephone = $_POST['telephone'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password !== $confirm_password){
    	    header('Location: ../register.php');
            return false;
        }

        $sql = "INSERT INTO `tb_user` (`full_name`,`username`,`password`,`nomor_telepon`,`is_active`)
        VALUES ('$name','$username',md5('$password'),'$telephone','1');";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
            if($row = $result->fetch_assoc()) {
                if($row['is_active'] == 1){
                    $_SESSION['username'] = $row['username'];
                    echo "<script>alert('Register Success')</script>";
                    header('Location: ../login.php');
                }else{
                    // Show flashdata
                    $_SESSION['message'] = array(
                        'type' => 'info',
                        'message' => 'Maaf! Ada yang salah pada akun anda.'                   
                    );
                }
            }
        } else {
            // Show flashdata
            $_SESSION['message'] = array(
                'type' => 'info',
                'message' => 'Register akun telah berhasil.'                   
            );
        }
    }
    header('location: ../login.php');
?>