    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulasi Buku</title>
    <link rel="stylesheet" href="styleProgress.css">
    </head>
    <body>
    <div class="container">
        <h2>Kalkulasi Halaman Buku per Hari</h2>
        <form id="calculationForm" action="calculate.php" method="POST">
        <div class="form-group">
            <label for="book_title">Judul Buku:</label>
            <input type="text" id="book_title" name="book_title" required>
        </div>
        <div class="form-group">
            <label for="total_pages">Jumlah Halaman:</label>
            <input type="number" id="total_pages" name="total_pages" required>
        </div>
        <div class="form-group">
            <label for="target_days">Target Hari Membaca:</label>
            <input type="number" id="target_days" name="target_days" required>
        </div>
        <div class="form-group">
            <button type="submit" id="calculateBtn">Hitung</button>
        </div>
        </form>

        <div class="result-container" id="resultContainer" style="display: none;">
        <!-- Hasil perhitungan akan ditampilkan di sini -->
        </div>
    </div>

    <script src="script.js"></script>
    </body>
    </html>
