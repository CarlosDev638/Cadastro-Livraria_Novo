<?php

$dbHost = 'Localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'cadastro-livraria';

$conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

/*
if ($conexao -> connect_errno) {
    echo 'Falha';
}

else{
    echo 'Conexão concluída com sucesso!';
}
*/
?>