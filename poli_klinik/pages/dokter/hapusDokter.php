<?php
include("../../config/koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari form
    $id = intval($_POST["id"]); // Sanitasi input untuk mencegah SQL Injection

    // Query untuk melakukan soft delete dengan mengubah nilai is_deleted menjadi 1
    $query = "UPDATE dokter SET is_deleted = 1 WHERE id = ?";

    // Persiapkan statement untuk menghindari SQL Injection
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("i", $id);

        // Eksekusi query
        if ($stmt->execute()) {
            echo '<script>';
            echo 'alert("Data dokter berhasil dihapus!");';
            echo 'window.location.href = "../../dokter.php";';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'alert("Gagal menghapus data dokter! Silakan coba lagi.");';
            echo 'window.location.href = "../../dokter.php";';
            echo '</script>';
        }

        // Tutup statement
        $stmt->close();
    } else {
        echo "Error: " . $mysqli->error;
    }
}

// Tutup koneksi
$mysqli->close();
?>
