<?php 
require_once "Model/ProdutoDAO.php";

$dados = filter_input_array(INPUT_GET);
$id = $dados['id'];

$produto = new stdClass();

if (! empty((int) $id)) {
    $dao = new ProdutoDAO();
    $produto = $dao->consultar([
        'id_produto' => $id
    ])[0];
}

require_once "View/pages/produto/edit.php";