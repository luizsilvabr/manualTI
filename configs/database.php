<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'manualti';

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()) {
    echo "Erro na conexão com o Banco de Dados :(" . mysqli_connect_error();
}
