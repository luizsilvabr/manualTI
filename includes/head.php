<?php
session_start();
require_once('configs/login/loginVerify.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/iziToast.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- SummerNote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!-- ---------- -->
    <title>Manual TI</title>
    <style>
        html{
            scroll-behavior: smooth;
        }
        .note-modal-footer {
            height: 70px;
            padding: 10px;
            text-align: center;
        }
        .note-icon-caret{
            display: none;;
        }
        .note-editable{
            height: 350px;
        }
       
        .note-editor .note-toolbar .note-color .dropdown-toggle, .note-popover .popover-content .note-color .dropdown-toggle{
            padding-left: 1px;
        }
        .note-dropdown-menu{
            padding: 0;
        }
        .table>:not(:first-child){
            border-top: none;
        }
        .manualCard{
            text-decoration: none;
            color: #000;
            transition: 0.4s;
        }
        .manualCard:hover{
            transform: translateY(-3px);
            transition: 0.3s;
            color: #000;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <div class="navbar">
        <div class="logo"><img src="assets/imgs/logo.png" width="165px"></div>
        <div class="itens">
            <a href="index"><img src="assets/imgs/home.png" width="40px">&nbsp;&nbsp;&nbsp<span>Home</span></a>
            <a href="adicionarManual"><img src="assets/imgs/addManual.png" width="40px">&nbsp;&nbsp;&nbsp<span>Adicionar Manuais</span></a>
            <a href="gerenciarManuais"><img src="assets/imgs/manual.png" width="40px">&nbsp;&nbsp;&nbsp<span>Gerenciar Manuais</span></a>
            <a href="configs/login/logout"><img src="assets/imgs/logout.png" width="40px">&nbsp; &nbsp;<span>Logout</span></a>
        </div>
    </div>
    <!-- end navbar -->