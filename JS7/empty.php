<?php
$myArray = array();
if (empty($myArray)) {
    echo "Array tidak teridentifikasi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

echo "<hr>";

if (empty($nonExisentVar)) {
    echo "Variabel tidak terdefinisi atau kosong";
} else {
    echo "Variabel terdifinisi dan tidak kosong";
}
?>