<?php
// Inisialisasi array yang berisi nama siswa dan nilai mereka
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

// Inisialisasi variabel untuk menyimpan total nilai
$totalNilai = 0;

// Menggunakan perulangan foreach untuk mengakses setiap nilai dalam array
foreach ($daftarNilai as $nilai) {
    // Menambahkan nilai siswa ke totalNilai
    $totalNilai += $nilai[1];
}

// Menghitung rata-rata nilai kelas
$rataRata = $totalNilai / count($daftarNilai);

// Menampilkan rata-rata nilai kelas
echo "Rata-rata kelas: $rataRata <br>";

// Menampilkan daftar nilai siswa yang di atas rata-rata kelas
echo "Daftar nilai siswa di atas rata-rata kelas: <br>";
foreach ($daftarNilai as $nilai) {  
    // Memeriksa apakah nilai siswa lebih tinggi dari rata-rata
    if ($nilai[1] > $rataRata) {
        // Jika ya, menampilkan nama dan nilai siswa
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>
