<?php
    require 'config/koneksi.php';

    // Ambil data dari session
    $id_poli = $_SESSION['id_poli']; // ID Poli dari Session
    $id_dokter = $_SESSION['id'];   // ID Dokter dari Session

    // Query untuk mendapatkan nama poli
    $query_poli = "SELECT nama_poli FROM poli WHERE id = $id_poli";
    $result_poli = mysqli_query($mysqli, $query_poli);

    if ($result_poli && mysqli_num_rows($result_poli) > 0) {
        $row = mysqli_fetch_assoc($result_poli);
        $nama_poli = $row['nama_poli'];
    } else {
        $nama_poli = "Tidak dapat mendapatkan nama poli";
    }

    // Query untuk menghitung jumlah pasien yang telah diperiksa
    $query_pasien_diperiksa = "SELECT COUNT(DISTINCT pasien.id) as totalPasien
        FROM detail_periksa 
        INNER JOIN periksa ON detail_periksa.id_periksa = periksa.id 
        INNER JOIN daftar_poli ON periksa.id_daftar_poli = daftar_poli.id 
        INNER JOIN pasien ON daftar_poli.id_pasien = pasien.id 
        INNER JOIN obat ON detail_periksa.id_obat = obat.id 
        INNER JOIN jadwal_periksa ON daftar_poli.id_jadwal = jadwal_periksa.id 
        INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id 
        WHERE dokter.id = '$id_dokter' AND daftar_poli.status_periksa = '1'";

    $result_pasien_diperiksa = mysqli_query($mysqli, $query_pasien_diperiksa);

    if ($result_pasien_diperiksa && mysqli_num_rows($result_pasien_diperiksa) > 0) {
        $data = mysqli_fetch_assoc($result_pasien_diperiksa);
        $totalPasien = $data['totalPasien']; // Menyimpan jumlah pasien
    } else {
        $totalPasien = "Data tidak ditemukan";
    }

    // Query untuk menghitung jumlah pasien yang belum diperiksa
    $query_pasien_belum_diperiksa = "SELECT COUNT(DISTINCT pasien.id) as totalBelumDiperiksa
        FROM daftar_poli 
        INNER JOIN pasien ON daftar_poli.id_pasien = pasien.id 
        INNER JOIN jadwal_periksa ON daftar_poli.id_jadwal = jadwal_periksa.id 
        INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id 
        WHERE dokter.id = '$id_dokter' AND daftar_poli.status_periksa = '0'";

    $result_pasien_belum_diperiksa = mysqli_query($mysqli, $query_pasien_belum_diperiksa);

    if ($result_pasien_belum_diperiksa && mysqli_num_rows($result_pasien_belum_diperiksa) > 0) {
        $data_belum = mysqli_fetch_assoc($result_pasien_belum_diperiksa);
        $totalBelumDiperiksa = $data_belum['totalBelumDiperiksa']; // Menyimpan jumlah pasien
    } else {
        $totalBelumDiperiksa = "Data tidak ditemukan";
    }

     // Menghitung total keseluruhan pasien
     $totalKeseluruhan = $totalPasien + $totalBelumDiperiksa;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        /* Style umum untuk teks putih */
        .text-white {
            font-weight: 500;
            /* membuat teks sedikit lebih tebal */
        }

        /* Mengubah ukuran dan gaya font untuk judul dan konten yang berbeda */
        h1.text-white {
            font-size: 2.2rem;
            /* ukuran font yang lebih besar */
            font-family: 'Arial', sans-serif;
            /* ganti dengan font pilihan Anda */
        }

        h4.text-white {
            font-size: 1.6rem;
            font-family: 'Arial', sans-serif;
        }

        h5.text-white {
            font-size: 1.3rem;
            font-family: 'Arial', sans-serif;
        }

        /* Gaya khusus untuk teks pada info-box */
        .info-box-text {
            font-size: 1rem;
            /* menyesuaikan ukuran font */
            margin-bottom: 5px;
            /* memberikan sedikit ruang di bawah teks */
        }

        /* Gaya khusus untuk nomor pada info-box */
        .info-box-number {
            font-size: 1.2rem;
            /* menyesuaikan ukuran font */
            font-weight: bold;
            /* membuatnya tebal */
        }
        .content {
            align-items: center;
        }

        .bg-foto {
            background-image: url('assets/images/lobby.jpg'); 
           background-size: cover; 
           background-position: center; 
           height: 91.8vh; 
           text: center;
        }
    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="bg-foto" >
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12"style="margin-top:40px">
                    <h1 class="m-0 text-center" >Selamat Datang <b>Dokter <?php echo $username ?></b></h1>
                    <h4 class="m-0 text-center">Saat Ini anda sedang berada di <?php echo $nama_poli; ?></h4>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <br><br><br>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box " style="background-color :#3A96E6; color:white">
                        <div class="inner">
                            <h3><?php echo htmlspecialchars($totalKeseluruhan); ?></h3>
                            <p>Jumlah Pasien <?php echo $nama_poli; ?></p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-users"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box " style="background-color :#77E4C8">
                        <div class="inner">
                            <h3><?php echo $totalPasien; ?><sup style="font-size: 20px"></sup></h3>
                            <p>Pasien Telah diperiksa</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-user-check"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box " style="background-color :#3A96E6; color:white">
                        <div class="inner">
                            <h3><?php echo htmlspecialchars($totalBelumDiperiksa); ?></h3>

                            <p>Pasien Belum Diperiksa</p>
                        </div>
                        <div class="icon">
                        <i class="fas fa-user-clock"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <!-- <div class="small-box bg-danger">
                        <div class="inner">
                            <h3></h3>

                            <p>Jadwal Aktif</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="obat.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div> -->
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    </div>
    <!-- /.content -->

    <!-- Link to Bootstrap JS and other necessary scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>