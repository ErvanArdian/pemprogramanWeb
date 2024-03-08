<?php
// Nilai skor pemain
$skor = 600; // Ganti nilai skor sesuai dengan skor pemain

// Menampilkan total skor pemain
$totalSkor = "Total skor pemain adalah: $skor <br>";

// Memeriksa apakah skor pemain melebihi 500
$hadiahTambahan = $skor > 500 ? "YA" : "TIDAK";

// Pesan untuk menampilkan apakah pemain mendapatkan hadiah tambahan
$pesanHadiah = "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";

// Menampilkan total skor pemain dan pesan hadiah tambahan
echo $totalSkor . $pesanHadiah;
?>
