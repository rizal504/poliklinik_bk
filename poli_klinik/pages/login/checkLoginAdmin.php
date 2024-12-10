<?php
    session_start();
    require '../../config/koneksi.php';


    if ($_SERVER['REQUEST_METHOD']== "POST") {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        if ($username == "admin" && $password == md5("12345")) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['akses'] = "admin";

            header("location:../../dashboard_admin.php");
        }
            else{
                echo '<script>alert("Email atau password salah");location.href="../../loginAdmin.php";</script>';
            }
        }
?>