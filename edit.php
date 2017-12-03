<?php 

require_once "Model/ProdutoDAO.php";
require_once "Model/Produto.php";


if (!empty($_POST)) {
    require_once "Controller/Index.php";
}
else {
    $dados = filter_input_array(INPUT_GET);
    $id = $dados['id'];
    
    $produto = new Produto();
    
    if (! empty((int) $id)) {
        $dao = new ProdutoDAO();
        $produto = $dao->consultar([
            'id_produto' => (int)$id
        ])[0];
    }
    
    require_once "View/pages/produto/edit.php";
}
