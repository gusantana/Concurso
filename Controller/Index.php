<?php 

require_once "Model/Produto.php";
require_once "Model/ProdutoDAO.php";
require_once "Model/ConnectionManager.php";


class Index {
    
    protected $conexao;
    
    public function __construct ()
    {
        $this->conexao = new ConnectionManager();
        $this->dados = filter_input_array(INPUT_POST);
    }
    
    public function executarAcao()
    {
        $acao = $this->dados['acao'];
        unset($this->dados['acao']);
        if (method_exists ($this, $acao)) {
            $this->{$acao}();
        }
    }
    
    public function salvar ()
    {
        $produto = new Produto();
        $produto->id_produto = $this->dados['id_produto'];
        $produto->codigo    = $this->dados['codigo'];
        $produto->descricao = $this->dados['descricao'];
        $produto->preco     = $this->dados['preco'];
        
        $dao = new ProdutoDAO();
        $produto = $dao->salvar($produto);
        header("Location: /concurso/edit.php?id={$produto->id_produto}");
    }
    
    public function excluir ()
    {
        $produto = new Produto();
        $produto->id_produto = $this->dados['id_produto'];
        
        $dao = new ProdutoDAO();
        $produto = $dao->excluir($produto);
        $_POST = [];
        header("Location: /concurso/index.php");
    }
}

(new Index())->executarAcao();

?>