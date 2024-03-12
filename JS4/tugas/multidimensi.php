<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Array Multidimensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .student-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; 
            padding: 10px; 
        }
        .student-avatar {
            width: 100px;
            height: 130px; 
            object-fit: cover; 
            margin-right: 20px;
        }
        .student-details {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .student-details p {
            margin: 0;
        }
        .symbol {
            font-size: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa array multidimensi</h2>

    <?php
    // Array multidimensi untuk data mahasiswa
    $mahasiswa = array(
        array("Nama" => "Jono Yono", "NIM" => "298573", "Jurusan" => "Teknik Informatika", "Email" => "jonoyono@gmail.com", "Avatar" => "img/avatar1.png"),
        array("Nama" => "Ari Andika", "NIM" => "448864", "Jurusan" => "Teknik Informatika", "Email" => "ariandika@gmail.com", "Avatar" => "img/avatar2.png"),
        array("Nama" => "Viona Febri", "NIM" => "622466", "Jurusan" => "Teknik Kimia", "Email" => "vionafebri@gmail.com", "Avatar" => "img/avatar3.png"),
        array("Nama" => "Indah Ratna", "NIM" => "809988", "Jurusan" => "Teknik Listrik", "Email" => "indahratna@gmail.com", "Avatar" => "img/avatar4.png"),
        array("Nama" => "Bagus Sup", "NIM" => "101121", "Jurusan" => "Teknik Sipil", "Email" => "bagussup@gmail.com", "Avatar" => "img/avatar5.png")
    );

    foreach ($mahasiswa as $data) {
        echo '<div class="student-container">';
        echo '<img src="' . $data["Avatar"] . '" alt="Avatar" class="student-avatar">';
        echo '<div class="student-details">';
        echo '<p><span class="symbol">◉</span> Nama: ' . $data["Nama"] . '</p>';
        echo '<p><span class="symbol">◉</span> NIM: ' . $data["NIM"] . '</p>';
        echo '<p><span class="symbol">◉</span> Jurusan: ' . $data["Jurusan"] . '</p>';
        echo '<p><span class="symbol">◉</span> Email: ' . $data["Email"] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>

</body>
</html>