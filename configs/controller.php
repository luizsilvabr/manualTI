<?php
session_start();
require_once('database.php');

if (isset($_POST['add'])) {
    $items = mysqli_real_escape_string($connect, $_POST['items']);
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $subtitulo = mysqli_escape_string($connect, $_POST['subtitulo']);
    $nome = $_SESSION['nomeUsuario'] . " " . $_SESSION['sobrenomeUsuario'];
    $query = "INSERT INTO manual(titulo, subtitulo, criadoPor, data, items) VALUES ('$titulo', '$subtitulo', '$nome', NOW(),'$items')";
    if (mysqli_query($connect, $query)) {
        $_SESSION['returnItems'] = "Manual Adicionado com Sucesso!";
        header("Location: ../adicionarManual");
    } else {
        $_SESSION['returnItems'] = "Erro ao Adicionar Manual.";
        header("Location: ../adicionarManual");
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $items = mysqli_real_escape_string($connect, $_POST['items']);
    $titulo = mysqli_escape_string($connect, $_POST['titulo']);
    $subtitulo = mysqli_escape_string($connect, $_POST['subtitulo']);
    $nome = $_SESSION['nomeUsuario'] . " " . $_SESSION['sobrenomeUsuario'];
    $query = "UPDATE manual SET items = '$items', criadoPor = '$nome', data = NOW(), titulo = '$titulo', subtitulo = '$subtitulo' WHERE id = '$id'";
    if (mysqli_query($connect, $query)) {
        $_SESSION['returnItems'] = "Manual Atualizado com Sucesso!";
        header("Location: ../gerenciarManuais");
    } else {
        $_SESSION['returnItems'] = "Erro ao Atualizar Manual.";
        header("Location: ../gerenciarManuais");
    }
}

if (isset($_GET['action']) == "delete") {
    echo "foi";
    $id = $_GET['id'];
    $query = "DELETE FROM manual WHERE id = '$id'";
    if (mysqli_query($connect, $query)) {
        $_SESSION['returnItems'] = "Manual Deletado com Sucesso!";
        header("Location: ../gerenciarManuais");
    } else {
        $_SESSION['returnItems'] = "Erro ao Deletar Manual.";
        header("Location: ../gerenciarManuais");
    }
}
