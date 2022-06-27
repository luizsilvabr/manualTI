<?php
session_start();
unset($_SESSION["msg"]);
$_SESSION['msg'] = "Logout Efetuado com Sucesso!";
header("Location: ../../login");
exit();