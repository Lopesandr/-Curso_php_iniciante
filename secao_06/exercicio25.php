<?php

$numero = 300;
$numero2 = 300;
$texto = "Hello";

if(is_int($numero) || is_float($numero)){
    $multiplicacao = $numero *2;

    if ($multiplicacao >100){
        echo "$multiplicacao é maior que 100";
    }else{
        echo "$multiplicacao não é menor que 100.";
    }

}else{
    echo "Não é um número";
}
