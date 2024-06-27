<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <h2>Hasil Perhitungan</h2>
    <?php
    // Periksa apakah semua parameter yang diperlukan ada dalam session
    session_start();
    if (isset($_SESSION['book_title']) && isset($_SESSION['total_pages']) && isset($_SESSION['target_days'])) {
        // Ambil nilai hasil perhitungan dari session
        $bookTitle = $_SESSION['book_title'];
        $totalPages = $_SESSION['total_pages'];
        $targetDays = $_SESSION['target_days'];

        // Tampilkan hasil perhitungan
        echo "<p>Judul Buku: $bookTitle</p>";
        echo "<p>Jumlah Halaman: $totalPages halaman</p>";
        echo "<p>Target Hari Membaca: $targetDays hari</p>";
        // Lakukan perhitungan lainnya jika perlu
    } else {
        echo "Parameter yang diperlukan tidak ditemukan.";
    }
    ?>
</body>
</html>
