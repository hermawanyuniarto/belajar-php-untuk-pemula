<?php
// $mahasiswa = [
//     ["Hermawan Yuniarto", "2002240682", "hermawanyuniarto@gmail.com", "Sistem Informatika"],
//     ["Galeh Firmansyah", "2002130785", "galih@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang buat sendiri
$mahasiswa = [
    [
        "nama" => "Hermawan Yuniarto", "nrp" => "2002240682",
        "email" => "hermawanyuniarto@gmail.com",
        "jurusan" => "Sistem Informasi",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Iwan Budianto", "nrp" => "2002010979",
        "email" => "iwanbudianto@gmail.com",
        "jurusan" => "Teknik Jaringan",
        "gambar" => "2.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>