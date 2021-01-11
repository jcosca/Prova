<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 

    $array1 = ['ES', 'MG', 'RJ', 'SP'];
    $array2 = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
    $array3 = [];

    foreach ($array1 as $key => $value) {
        $array3[$value] = $array2[3 - $key]
    }

    foreach ($array3 as $key => $value) {
        echo $key." - ".$value.PHP_EOL;
    }

    ?>

</body>
</html>

