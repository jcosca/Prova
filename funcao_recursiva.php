
<?php 

    $n = 1;

    while (($n%2)!=0 || ($n%3)!=0 || ($n%10)!=0) {
        $n++;
    };

    echo "O número é ".$n."!";

?>