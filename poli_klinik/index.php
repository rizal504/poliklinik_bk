<!DOCTYPE html>
<html lang="en">

<style>
    .client_section {
        padding: 50px 0;
        background-color: #f7f7f7;
        color: #333;
    }

    .heading_container {
        text-align: center;
        margin-bottom: 40px;
    }

    .heading_container h2 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .testimonial-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 15px;
    }

    .card {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-content {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 20px;
        padding: 20px;
    }

    .img-box {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-box img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }

    .text-content {
        text-align: left;
    }

    .text-content h6 {
        font-size: 18px;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .location {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }

    .testimonial-text {
        font-size: 14px;
        line-height: 1.6;
    }

    .home-page {
        background-image: url('assets/images/homebg.png');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    position: relative;
    background-color: rgba(255, 255, 255, 0.8); /* Warna putih semi-transparan */
    background-blend-mode: overlay; /* Campurkan gambar dan warna */
    }

    @media (max-width: 768px) {
        .card-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .img-box {
            justify-content: center;
            margin-bottom: 15px;
        }
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Copyright: © 2024 Sistem Temu Janji Pasien - dibuat sebagai syarat sertifikasi oleh Syaiful Rizal Sidiq -->
    <title>Poliklinik</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fav Icon -->
    <link rel="icon" type="image/png" href="assets/images/logo_dinus.png">
</head>

<body class="hold-transition login-page">
<div class="container-fluid home-page d-flex justify-content-center align-items-center" 
    >
    <div class="bg-white p-5 rounded shadow text-center" style="max-width: 800px;">
        <h1 class="font-weight-bold mb-3">Sistem Temu Janji Pasien - Dokter</h1>
        <h3>
            Bimbingan Karir 2024 Bidang Website
        </h3>
        <p>
            oleh Syaiful Rizal Sidiq - A11.2021.13849
        </p>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card" style="background-color: #007BFF">
                    <div class="card-body">
                        <img src="assets/images/pasien.png" class="" style="height: 100px;"></img>
                        <h3 class="text-bold text-white">Pasien</h3>

                        <a href="loginUser.php" class="btn btn-secondary"  style="background-color: #77E4C8; color: #000; border: none; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#000';" 
                        onmouseout="this.style.backgroundColor='#77E4C8'; this.style.color='#000';">Login Sebagai Pasien</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="background-color: #007BFF">
                    <div class="card-body">
                    <img src="assets/images/doctor.png" class="" style="height: 100px;"></img>
                        <h3 class="text-bold text-white">Dokter</h3>
        
                        <a href="login.php" class="btn btn-info "  style="background-color: #77E4C8; color: #000; border: none; transition: all 0.3s;"
                        onmouseover="this.style.backgroundColor='white'; this.style.color='#000';" 
                        onmouseout="this.style.backgroundColor='#77E4C8'; this.style.color='#000';">Login Sebagai Dokter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- jQuery -->
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>