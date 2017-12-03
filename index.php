<?php

require_once "config.php";
require_once "Controller\Index.php";

$dao = new ProdutoDAO();
$msgResultado = $dao->consultar();
$listaProdutos = $msgResultado;
require_once "View/pages/produto/index.php";
