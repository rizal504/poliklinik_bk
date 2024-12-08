<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            
        }

        .container {
            padding: 0;
        }

        .title {
            font-size: 1rem;
            /* Responsive font size */
            color: #000;
            margin-bottom: 1.25rem;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 0.1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .banner-section {
            font-family: 'Sora', sans-serif;
            background-image: url('assets/images/homebg.png');
            background-position: center;
            background-size: cover;
            font-weight: 800;
            color: black;
            padding: 10% 0;
            /* Responsive padding */
            text-align: center;
            display: flex;
            /* Use flexbox to center content */
            flex-direction: column;
            /* Stack content vertically */
            align-items: center;
            /* Center content horizontally */
            justify-content: center;
            /* Center content vertically */
            height: 100vh;
            /* Set height to 100% of viewport height */
        }

        .button {
        background-color: white ; /* Warna latar awal */
        color: #E69B1E; /* Warna teks awal */
        border-color: white;
        border-radius: 10px;
        padding: 1rem;
        box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
        max-width: 75%;
        text-align: center; /* Center align text */
        font-size: 25px; 
        padding: 1rem 2rem;
        text: bold;
        transition: background-color 0.3s ease, color 0.3s ease; /* Animasi transisi */;
    }

    .button:hover {
        background-color: #007BFF; /* Warna latar saat hover */
        border-color: white;
        color: white; /* Warna teks saat hover */
    }

        .floating-container {
            background-color: #F5F5F5;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
            margin: -8% auto 0;
            /* Responsive margin */
            max-width: 75%;
            /* Responsive width */
        }

        .floating-container {
            background-color: white;
            /* Light grey background */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
            /* Box-shadow for depth */
            margin: 5% auto 0;
            /* Increased negative top margin for more overlap */
            padding:0 10rem ;
            /* Reduced padding for less height */
            text-align: center;
            /* Center text */
            display: flex;
            /* Use flexbox to center items */
            align-items: center;
            /* Center items vertically */
            justify-content: center;
            /* Center items horizontally */
            flex-direction: column;
            /* Stack items vertically */
            max-width: 80%;
            /* Maximum width */
        }

        .floating-word {
            display: flex;
            /* Use flexbox for the inner row */
            justify-content: center;
            /* Center content horizontally */
            align-items: center;
            /* Center content vertically */
            flex-wrap: wrap;
            /* Allow items to wrap on small screens */
            gap: 5rem;
            /* Space between items */
        }

        .floating-word>div {
            flex: 1;
            /* Flex-grow to fill space */
            max-width: 200px;
            /* Maximum width for each column */
            min-width: 150px;
            /* Minimum width for each column */
        }

        .floating-word img {
            max-height: 100px;
            /* Maximum height for images */
            width: auto;
            /* Maintain aspect ratio */
            margin-bottom: 1rem;
            /* Space between image and text */
        }


        .tagline p {
            font-size: 1.5rem;
            /* Responsive font size */
            color: #000;
        }

        .galeri-container {
            width: 100%;
            max-width: 18rem;
            margin: 1rem;
            display: inline-block;
            /* Changed to inline-block for better responsiveness */
        }

        .galeri-img-top {
            max-width: 100%;
            height: auto;
        }

        .info-section {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .info-block {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            max-width: 80%;
            margin-bottom: 20px;
        }

        .info-block img {
            width: 50%;
            height: auto;
            object-fit: cover;
        }

        .text-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-content h4 {
            font-size: 1.5rem;
            color: #333;
            margin: 0;
        }

        .text-content p {
            font-size: 1rem;
            color: #666;
            line-height: 1.5;
        }

        .card-img-top {
        width: 100%; /* Lebar penuh sesuai container */
        height: 200px; /* Tinggi yang konsisten */
        object-fit: cover; /* Memotong gambar agar sesuai */
        border-radius: 5px; /* Opsional, untuk tampilan lebih halus */
    }


        @media (max-width: 768px) {
            .title {
                font-size: 1.5rem;
                /* Smaller font size for smaller screens */
            }

            .tagline p {
                font-size: 1.2rem;
                /* Smaller font size for smaller screens */
            }

            .floating-container {
                margin-top: -25%;
                /* Increased negative margin for better overlap */
            }
        }
    </style>
</head>

<body>
    <!-- Section 1: Banner -->
    <section class="banner-section">
        <div class="container  my-5 fade-in ">
            <a href="daftarPoliklinik.php " class=" button" >Daftar Poli</a>
        </div>
    </section>

    <!-- Section 2: Floating Container -->
        <div>
            <h3 class="text-bold text-center " style="margin-top: 50px;">
                DAFTAR FASILITAS KLINIK MITRASEHAT
            </h3>
        </div>
    <section class="info-section">
    <div class="container">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/images/apotik.jpg" class="card-img-top" alt="Interior">
                <div class="card-body">
                    <h5 class="card-title">Apotik</h5>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/images/tindakan.jpeg" class="card-img-top" alt="Tim Medis">
                <div class="card-body">
                    <h5 class="card-title">Ruang Tindakan</h5>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/images/tech.jpg" class="card-img-top" alt="Teknologi">
                <div class="card-body">
                    <h5 class="card-title">Laboratorium</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Card 4 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/images/ruangtunggu.jpg" class="card-img-top" alt="Interior">
                <div class="card-body">
                    <h5 class="card-title">Ruang Tunggu</h5>
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/images/laktasi.jpg" class="card-img-top" alt="Tim Medis">
                <div class="card-body">
                    <h5 class="card-title">Ruang Laktasi</h5>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <img src="assets/images/ambulance.jpg" class="card-img-top" alt="Teknologi">
                <div class="card-body">
                    <h5 class="card-title">Ambulance</h5>
                </div>
            </div>
        </div>
    </div>
</div>



        <!-- INFORMASI DOKTER -->
        <div>
            <h3 class="text-bold ">
                DAFTAR DOKTER KLINIK MITRASEHAT
            </h3>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0 ">
                        <table class="table table-hover table-bordered text-nowrap">
                            <thead class="text-center" style="background-color: #77E4C8">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Poli</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- TAMPILKAN DATA dokter DI SINI -->
                                <?php
                            require 'config/koneksi.php';
                            $no = 1;
                            $query = "SELECT dokter.id, dokter.nama, dokter.alamat, dokter.no_hp, poli.nama_poli FROM dokter INNER JOIN poli ON dokter.id_poli = poli.id";
                            $result = mysqli_query($mysqli, $query);

                            while ($data = mysqli_fetch_assoc($result)) {
                                # code...  
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['nama_poli'] ?></td>
                                   
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

    <!-- INFORMASI POLIKLINIK  -->
    <div>
        <h3 class="text-bold ">
            DAFTAR POLIKLNIK KLINIK MITRASEHAT
        </h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                  
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-bordered text-nowrap">
                            <thead class="text-center" style="background-color: #77E4C8">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Poli</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- TAMPILKAN DATA Poli DI SINI -->
                                <?php
                            require 'config/koneksi.php';
                            $no = 1;
                            $query = "SELECT * FROM poli";
                            $result = mysqli_query($mysqli, $query);

                            while ($data = mysqli_fetch_assoc($result)) {
                                # code...  
                            ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td><?php echo $data['nama_poli'] ?></td>
                                    <td style="white-space: pre-line;"><?php echo $data['keterangan'] ?></td>
                                    
                                   
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
</div>
    </section>



</body>

</html>