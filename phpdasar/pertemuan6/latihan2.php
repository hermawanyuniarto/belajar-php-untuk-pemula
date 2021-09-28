<?php
$mahasiswa = [
    ["Hermawan Yuniarto", "2002240682", "hermawanyuniarto@gmail.com", "Sistem Informatika"],
    ["Galeh Firmansyah", "2002130785", "galih@gmail.com", "Teknik Informatika"]
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
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Email : <?= $mhs[2]; ?></li>
            <li>Jurusan : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>