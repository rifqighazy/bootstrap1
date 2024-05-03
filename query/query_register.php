<?php 
    include '../database.php';
    session_start();
    if(isset($_POST['username']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $telephone = $_POST['telephone'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if($password == $confirm_password){
            // Check Email
            $checkusername = "SELECT username FROM tb_user WHERE username='$username' LIMIT 1";
            $checkusername_run = mysqli_query($conn, $checkusername);

            if(mysqli_num_rows($checkusername_run) > 0)
            {
                // Already Email Exists
                $_SESSION['message'] = "Maaf! Username sudah terdaftar.";
                header('Location: ../register.php');
                exit(0);
            }
            else
            {
                $user_query = "INSERT INTO tb_users (full_name,username,nomor_telepon,password) VALUES ('$name','$username','$telephone',md5'$password')";
                $user_query_run = mysqli_query($con, $user_query);

                if($user_query_run)
                {
                    $_SESSION['message'] = "Registrasi telah berhasil.";
                    header("Location: ../register.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['message'] = "Maaf! Ada yang salah!";
                    header("Location: ../register.php");
                    exit(0);
                }
            }
        }
        else
        {
            $_SESSION['message'] = "Password dan Konfirmasi Password tidak cocok";
            header("Location: ../register.php");
            exit(0);
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