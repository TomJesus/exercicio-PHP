<?php

function divisao( array $numero):bool{

    if (0==($numero['numero1']) || 0==($numero['numero2'])){     // verificação dos numeros passados.

        throw new Exception("O valor passado não pode ser igual a 0!"."\n");
    }
    return true;
}

$numero = [
    'numero1' => 0,   // atribuindo valor as variaveis do arry.

    'numero2'=> 20,
];

$status = false;

try {
    $status = divisao($numero);       //Tretamento de excessão com trycatch
} catch (Exception $e) {
    echo $e->getMessage();

} finally {
    echo "Status da operação: " . (int)$status."\n";  // cast
   //die();
}

echo PHP_EOL;

echo 'O resultado da divisão dos numeros passados é '.
    ($numero['numero1']/$numero['numero2']);  //fazendo a divisão dos dois numeros passados no arry.