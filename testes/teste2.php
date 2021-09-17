<?php

//RECUPERANDO A SESSÃO CRIADA

session_start();

echo session_id();

// echo $nome;

//EXIBINDO DADOS DE UMA VARIÁVEL DE SESSÃO

echo $_SESSION["nome"];
$_SESSION ["nome"] = "ISABELA VICTORIA DE NOVAIS ROMANATO " ;


?>