<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

//kode pelengkap untuk menampilkan variabel yang ada
echo "Hasil penjumlahan: " . $hasilTambah . "<br>";
echo "Hasil pengurangan: " . $hasilkurang . "<br>";
echo "Hasil perkalian: " . $hasilkali . "<br>";
echo "Hasil pembagian: " . $hasilBagi . "<br>";
echo "Sisa pembagian: " . $sisaBagi . "<br>";
echo "Hasil pangkat: " . $pangkat . "<br>";
echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

//kode pelengkap dan menata hasil
echo "Hasil persamaan: " . ($hasilSama ? 'True' : 'False') . "<br>";
echo "Hasil ketidak samaan: " . ($hasilTidakSama ? 'True' : 'False') . "<br>";
echo "Lebih kecil: " . ($hasilLebihKecil ? 'True' : 'False') . "<br>";
echo "Lebih besar: " . ($hasilLebihBesar ? 'True' : 'False') . "<br>";
echo "Lebih kecil atau sama dengan: " . ($hasilLebihKecilSama ? 'True' : 'False') . "<br>";
echo "Lebih besar atau sama dengan: " . ($hasilLebihBesarSama ? 'True' : 'False') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

//kode pelengkap 
echo "<br><br>";
echo "Hasil operasi AND: " . ($hasilAnd ? 'True' : 'False') . "<br>";
echo "Hasil operasi OR: " . ($hasilOr ? 'True' : 'False') . "<br>";
echo "Negasi dari nilai a: " . ($hasilNotA ? 'True' : 'False') . "<br>";
echo "Negasi dari nilai b: " . ($hasilNotB ? 'True' : 'False') . "<br>";

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br><br>";
echo "Nilai a setelah ditambah dengan b: $a <br>";
echo "Nilai a setelah dikurangi dengan b: $a <br>";
echo "Nilai a setelah dikali dengan b: $a <br>";
echo "Nilai a setelah dibagi dengan b: $a <br>";
echo "Sisa pembagian a dengan b: $a <br>";