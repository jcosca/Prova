
<?php 

    $array1 = ['ES', 'MG', 'RJ', 'SP'];
    $array2 = ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];
    $array3 = [];

    foreach ($array1 as $key => $value) {
        $array3[$value] = $array2[(3 - $key)];
    }

    foreach ($array3 as $key => $value) {
        echo $key." - ".$value."<br>";
    }

?>

