<?php
session_start();
include_once("../database.php");

if (empty($_POST['usuario'] || empty($_POST['senha']))) {
    header('Location: ../../login');
    exit();
} else {
    $usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_real_escape_string($connect, $_POST['senha']);

    $query = "SELECT id, usuario, senha, nome, sobrenome FROM usuarios WHERE usuario = '$usuario' and senha = md5('$senha')";
    $result = mysqli_query($connect, $query);
    $resultQueryRow = mysqli_fetch_all($result);
    $row = mysqli_num_rows($result);
    $nomeDoUsuario = $resultQueryRow[0][3];
    $sobrenomeDoUsuario = $resultQueryRow[0][4];
    if ($row == 1) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nomeUsuario'] = $nomeDoUsuario;
        $_SESSION['sobrenomeUsuario'] = $sobrenomeDoUsuario;
        $_SESSION['msg'] = "Seja Bem Vindo, $nomeDoUsuario!";
        header('Location: ../../index');
    } else {
        $_SESSION['msg'] = "Erro ao Efetuar Login...";
        header('Location: ../../login');
        exit();
    }
}

