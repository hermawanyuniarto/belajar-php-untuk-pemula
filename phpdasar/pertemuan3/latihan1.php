<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i=1; $i <=3; $i++) { ?> 
        <tr>
            <?php for ($j=1; $j <=5; $j++) { ?> 
                <td><?php echo "$i, $j"; ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>

</body>
</html>