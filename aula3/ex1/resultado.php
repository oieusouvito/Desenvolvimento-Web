<?php

    echo "Resultado da soma:   ";
    $soma = $_GET['numero1'] + $_GET['numero2'] + $_GET['numero3'];
    print($soma);
    if ($_GET['numero1'] > $_GET['numero2'] && $_GET['numero3']){
        echo "<br>Maior número é: ";
        print($_GET['numero1']);
    } elseif ($_GET['numero2'] > $_GET['numero1'] && $_GET['numero3']){
        echo "<br>Maior número é: ";
        print($_GET['numero2']);
    } else {
        echo "<br>Maior número é: ";
        print($_GET['numero3']);
    }



?>