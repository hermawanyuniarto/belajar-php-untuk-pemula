<?php
// melakukan pengulangan pada array
// for / foreach
$angka = [3, 5, 9, 35, 59, 93, 99, 39];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <?php for ($i=0; $i < count($angka) ; $i++) { ?>
        <div><?= $angka[$i]; ?></div>
    <?php } ?>
    
</body>
</html>