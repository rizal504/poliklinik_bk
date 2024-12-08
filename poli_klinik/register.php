<!DOCTYPE html>
<html>

<head>
    <!-- Copyright: © 2024 Sistem Temu Janji Pasien - dibuat sebagai syarat sertifikasi oleh Syaiful Rizal Sidiq -->

    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahan CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #3A96E6;
            
        }

        .login-container {
            display: flex;
            max-width: 1200px;
            /* Ubah max-width sesuai kebutuhan */
            background-color: #fff;
            color: black;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .left-container {
            flex: 1;
            overflow: hidden;
            
            
        }

        .left-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .right-container {
            flex: 1;
            
            /* Menambahkan padding untuk memperbesar area formulir */
        }

        .login-form {
            max-width: 400px;
            /* Sesuaikan dengan kebutuhan */
            margin: 0 auto;
        }

        .login-form h2 {
            text-align: center;
            /* Tengahkan judul */
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
        }

        .login-form input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: none;
            /* Hapus border */
            border-bottom: 1px solid #ccc;
            /* Tambahkan garis bawah */
            outline: none;
            /* Hapus outline */
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="left-container">
            <img src="assets/images/homebg.png" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <br><br><br>
                <h4 class="text-center">Register </h4>
                <form action="pages/register/checkRegister.php" method="post">
                    <label for="nama">Nama :</label>
                    <input type="text" class="form-control" name="nama" required>

                    <label for="no_hp">Nomor KTP :</label>
                    <input type="number" class="form-control" name="no_ktp" required>

                    <label for="no_hp">Alamat :</label>
                    <input class="form-control" id="alamat" name="alamat" required></input>

                    <label for="no_hp">Password :</label>
                    <input type="password" class="form-control" name="password" required>

                    <label for="no_hp">Nomor Handphone :</label>
                    <input type="number" class="form-control" name="no_hp" required>

                    <button type="submit" class="text-white" style="background-color: #007BFF; color: white; border: none; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='#77E4C8'; this.style.color='#000';" 
                        onmouseout="this.style.backgroundColor='#007BFF'; this.style.color='#000';">
                        Register
                    </button>
                </form>

            </div>
            <div class="text-center mt-3">
                <p>Sudah punya akun pasien? <a href="loginUser.php" class="">
                    Login
                </a></p>
                
            </div>
        </div>
    </div>
    </div>

</body>

</html>
</script>
</body>

</html>