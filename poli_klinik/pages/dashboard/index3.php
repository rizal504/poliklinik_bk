<?php

include 'config/koneksi.php';


$query_jml_pasien = "SELECT COUNT(*) as jumlah_pasien FROM pasien";
$query_jml_dokter = "SELECT COUNT(*) as jumlah_dokter FROM dokter";
$query_jml_poli = "SELECT COUNT(*) as jumlah_poli FROM poli";
$query_jml_obat = "SELECT COUNT(*) as jumlah_obat FROM obat";

// Eksekusi query dan ambil hasilnya
$result_pasien = mysqli_query($mysqli, $query_jml_pasien);
$result_dokter = mysqli_query($mysqli, $query_jml_dokter);
$result_poli = mysqli_query($mysqli, $query_jml_poli);
$result_obat = mysqli_query($mysqli, $query_jml_obat);

// Cek apakah query berhasil dieksekusi
if ($result_pasien && $result_dokter && $result_poli && $result_obat) {
    // Ambil hasil query
    $row_pasien = mysqli_fetch_assoc($result_pasien);
    $row_dokter = mysqli_fetch_assoc($result_dokter);
    $row_poli = mysqli_fetch_assoc($result_poli);
    $row_obat = mysqli_fetch_assoc($result_obat);

    // Ambil nilai jumlah dari hasil query
    $jumlah_pasien = $row_pasien['jumlah_pasien'];
    $jumlah_dokter = $row_dokter['jumlah_dokter'];
    $jumlah_poli = $row_poli['jumlah_poli'];
    $jumlah_obat = $row_obat['jumlah_obat'];
} else {
    // Handle kesalahan jika query tidak berhasil
    $jumlah_pasien = "Error";
    $jumlah_dokter = "Error";
    $jumlah_poli = "Error";
    $jumlah_obat = "Error";
}
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
        .bg-foto {
           background-image: url('assets/images/ruangtunggu.jpg'); 
           background-size: cover; 
           background-position: center; 
           height: 91.8vh; 
           text: center;
           background-color: rgba(255, 255, 255, 0.6); /* Warna putih semi-transparan */
           background-blend-mode: overlay; /* Campurkan gambar dan warna */
        }
    </style>
</head>

<body>
    <!-- Content Header (Page header) -->
    <div class="bg-foto" >
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12"style="margin-top:40px">
                    <h1 class="m-0 text-center" >Selamat Datang <b>Admin</b></h1>
                    <h1 class="m-0 text-center" >Klinik MitraSehat</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <br><br>
    <section class="content ">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box text-left "style="background-color: #77E4C8">
                        <div class="inner">
                            <h3 class="ml-5"><?php echo $jumlah_pasien; ?></h3>

                            <p class="ml-2">Jumlah Pasien</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users white-icon"></i>
                        </div>
                        <a href="pasien.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color :#3A96E6">
                        <div class="inner text-white">
                            <h3 class="ml-5 "><?php echo $jumlah_dokter; ?><sup style="font-size: 20px font:white"></sup></h3>
                            <p class="ml-3">Total Dokter</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <a href="dokter.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color :#77E4C8">
                        <div class="inner">
                            <h3 class="ml-4"><?php echo $jumlah_poli; ?></h3>

                            <p class="ml-3">Total Poli</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <a href="poli.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color :#3A96E6">
                        <div class="inner text-white">
                            <h3 class="ml-5"><?php echo $jumlah_obat; ?></h3>

                            <p class="ml-3">Total Jenis Obat</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <a href="obat.php" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
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