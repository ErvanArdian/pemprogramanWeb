<?php
// Harga produk sebelum diskon
$hargaProduk = 120000;

// Persentase diskon
$diskon = 0.2; // 20%

// Memeriksa apakah harga produk melebihi batas untuk mendapatkan diskon
if ($hargaProduk > 100000) {
    // Menghitung harga setelah diskon
    $hargaDiskon = $hargaProduk - ($hargaProduk * $diskon);
    // Menampilkan harga yang harus dibayar setelah mendapatkan diskon
    echo "Harga yang harus dibayar setelah mendapatkan diskon 20% adalah: Rp " . number_format($hargaDiskon, 0, ",", ".");
} else {
    // Jika harga produk tidak memenuhi syarat untuk diskon, menampilkan harga tanpa diskon
    echo "Harga yang harus dibayar tanpa diskon adalah: Rp " . number_format($hargaProduk, 0, ",", ".");
}
?>
