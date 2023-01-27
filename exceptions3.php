<?php

function validarUsuario(array $usuario){

    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){

        throw new Exception("Campos obrigatórios não foram preenchidos!");

    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

$status = false;

try {
    $status = validarUsuario($usuario);       //Tretamento de excessão com trycatch
} catch (Exception $e) {
    echo $e->getMessage();

} finally {
    echo "Status da operação: " . (int)$status;  // cast
    die();
}


echo "\n... executando ... \n";