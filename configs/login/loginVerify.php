<?php 
if(!isset($_SESSION['usuario'])){
    $_SESSION['msg'] = "Atenção!";  
    header('Location: login');
    exit();
}