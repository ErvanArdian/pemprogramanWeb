<?php
$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah kursi yang masih kosong di restoran adalah: $kursiKosong <br>";
echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persentaseKursiKosong, 2) . "%";
?>
