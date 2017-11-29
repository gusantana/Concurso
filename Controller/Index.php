<?php 

require_once "../Model/Produto.php";
require_once "../Model/ConnectionManager.php";


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
        $this->{$acao}();
    }
    
    public function salvar ()
    {
        $produto = new Produto();
        $produto->codigo    = $this->dados['codigo'];
        $produto->descricao = $this->dados['descricao'];
        $produto->preco     = $this->dados['preco'];
        
        $dao = new ProdutoDAO();
        $dao->salvar($produto);
        
    }
    
}

(new Index())->executarAcao();

?>