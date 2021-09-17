<?php

function lerArquivo($nomeArquivo)

{
    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

/*
Parãmetros da função
1- usuário vindo do form
2-senha vindo do form
3-dados do arquivo json do usuario e senha
*/ 

function realizarLogin($usuario, $senha, $dados)
{

    foreach ($dados as  $dado) {
       
        if ($dado->$usuario == $usuario && $dado->senha == $senha) {

            //VARIÁVEIS DE SESSÃO

            $_SESSION["usuario"] = $dado->usuario;
            $_SESSION["id"] = session_id();
            $_SESSION["data_hora"] = date('d/m/Y - h:i:s');

            header('location: area_restrita.php');
             exit;
            
        } else {

            header('location: index.php'); 
            exit;
            
        }
        
    }
}

?>