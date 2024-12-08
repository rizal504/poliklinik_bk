<!DOCTYPE html>
<html>

<head>
    <!-- Copyright: © 2024 Sistem Temu Janji Pasien - dibuat sebagai syarat sertifikasi oleh Syaiful Rizal Sidiq -->

    <title>Login Admin</title>
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
            background-color: #a6e9a6;
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
            padding: 40px;
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
            color: #fff;
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
            <img src="assets/images/admin.png" alt="Login Image">
        </div>
        <div class="right-container">
            <div class="login-form">
                <h4 class="text-center">Login Admin</h4>
                <p class="login-box-msg text-center">Silahkan login sebagai <b class="text-success">Admin</b> </p>
                <br><br>
                <form action="pages/login/checkLogin.php" method="post">
                        <div style="margin-bottom: 15px;">
                            <label for="username">Username:</label>
                            <input type="text" name="username" style="display: block; width: 100%; padding: 8px;" required>
                        </div>

                        <div style="margin-bottom: 15px; position: relative;">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" style="display: block; width: 100%; padding: 8px;" required>
                            <input type="checkbox" id="toggle-password" 
                                style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer; width: auto;" 
                                onchange="this.previousElementSibling.type = this.checked ? 'text' : 'password';">
                            <label for="toggle-password" 
                                style="position: absolute; top: 50%; right: 35px; transform: translateY(-50%); cursor: pointer;">Show</label>
                        </div>

                        <button type="submit" class="btn btn-block text-white" style="background-color: #007BFF; color: white; border: none; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='#77E4C8'; this.style.color='#000';" 
                        onmouseout="this.style.backgroundColor='#007BFF'; this.style.color='#000';" >
                            Login
                        </button>
                    </form>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
</script>
</body>

</html>