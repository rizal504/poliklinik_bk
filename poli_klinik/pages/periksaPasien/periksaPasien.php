<?php
    require '../../config/koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_POST['id']; // ID daftar pasien dari tabel daftar_poli.
        $tanggalPeriksa = $_POST['tanggal_periksa']; //Tanggal pemeriksaan.
        $catatan = $_POST['catatan']; //Catatan terkait pemeriksaan.
        $arrayObat = $_POST['obat']; //Array berisi daftar ID obat yang dipilih.

        $updateStatus = "UPDATE daftar_poli SET status_periksa = '1' WHERE id = '$id'";
        $query = mysqli_query($mysqli,$updateStatus);

        if ($query) {
          $insertPeriksa = "INSERT INTO periksa (id_daftar_poli, tgl_periksa, catatan, biaya_periksa) VALUES ('$id', '$tanggalPeriksa', '$catatan', 150000)";
          $queryInsertPeriksa = mysqli_query($mysqli,$insertPeriksa);
          if ($queryInsertPeriksa) {
            $getLastData = "SELECT * FROM periksa ORDER BY id DESC LIMIT 1";//fungsi ambil data terakhir periksa
            $queryGetLastData = mysqli_query($mysqli, $getLastData);
            $getIdPeriksa = mysqli_fetch_assoc($queryGetLastData);
        
            $idPeriksa = $getIdPeriksa['id'];
        
            // Inisialisasi total biaya dengan nilai awal 150000
            $totalBiaya = 150000;

            //Menyimpan detail obat yang dipilih ke tabel detail_periksa.
            foreach ($arrayObat as $obat) {
                $inserDetailPeriksa = "INSERT INTO detail_periksa (id_periksa, id_obat) VALUES ('$idPeriksa', '$obat')";
                $queryDetailPeriksa = mysqli_query($mysqli, $inserDetailPeriksa);
        
                //Mengambil harga obat dari tabel obat dan menambahkan harga tersebut ke $totalBiaya
                $getHargaObat = "SELECT harga FROM obat WHERE id = '$obat'";
                $queryHargaObat = mysqli_query($mysqli, $getHargaObat);
                $hargaObat = mysqli_fetch_assoc($queryHargaObat)['harga'];
        
                // Tambahkan harga obat ke total biaya
                $totalBiaya += $hargaObat;
        
                if (!$queryDetailPeriksa) {
                    echo '<script>alert("Error");window.location.href="../../periksaPasien.php"</script>';
                    exit; // Keluar dari skrip jika terjadi kesalahan
                }
            }
        
            // Update total biaya pada data periksa
            $updateTotalBiaya = "UPDATE periksa SET biaya_periksa = '$totalBiaya' WHERE id = '$idPeriksa'";
            $queryUpdateTotalBiaya = mysqli_query($mysqli, $updateTotalBiaya);
        
            if ($queryUpdateTotalBiaya) {
                echo '<script>alert("Pasien telah diperiksa");window.location.href="../../periksaPasien.php"</script>';
            } else {
                echo '<script>alert("Error");window.location.href="../../periksaPasien.php"</script>';
            }
        }
        
        }

    }
?>