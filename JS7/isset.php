<?php
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["usia"])) {
    echo "Nama: " . $data["nama"];
} else {
    echo "Variabel 'usia' tidak ditemukan dalam array."; 
}
?>