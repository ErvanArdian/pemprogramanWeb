<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan nilai siswa dari terkecil ke terbesar
sort($nilaiSiswa);

// Menghapus dua nilai terendah
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

// Menghapus dua nilai tertinggi
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

// Menghitung total nilai siswa
$totalNilai = array_sum($nilaiSiswa);

// Menghitung rata-rata nilai siswa
$rataRata = $totalNilai / count($nilaiSiswa);

// Menampilkan total nilai
echo "Total nilai siswa setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai <br>";

// Menampilkan urutan nilai
echo "Urutan nilai siswa secara berurutan: ";
foreach ($nilaiSiswa as $nilai) {
    echo "$nilai, ";
}

// Menampilkan rata-rata nilai
echo "<br>Rata-rata nilai siswa adalah: $rataRata";
?>
