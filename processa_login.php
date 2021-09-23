<?php

//INICIALIZA A SESSÃO
session_start();

//IMPORTAÇÃO DO ARQUIVO DE FUNCOES

require_once ('./funcoes.php');

//RECEBENDO OS DADOS DO FORMULÁRIO

if(isset($_POST["txt_usuario"]) || isset($_POST["txt_senha"])){

    $usuario = $_POST["txt_usuario"];
    $senha = $_POST["txt_senha"];

// var_dump($_POST);exit;

realizarLogin($usuario, $senha, lerArquivo("./dados/usuarios.json"));

} else if ($_GET["logout"]) {

    finalizarLogin();
}




?>