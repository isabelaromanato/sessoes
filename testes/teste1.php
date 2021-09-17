<?php

/*session sempre no topo*/ 
//CRIANDO SESSÃO:

session_start();

//VERIFICANDO O ID DA SESSÃO:

echo session_id();

//CRIANDO VARIÁVEIS DE SESSÃO 
$_SESSION ["nome"] = "ISABELA VICTORIA DE NOVAIS ROMANATO" ;


$nome = "ISABELA VICTORIA DE NOVAIS ROMANATO";
echo $nome;

?>