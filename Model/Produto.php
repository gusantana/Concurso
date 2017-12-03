<?php

class Produto {
    
    public $id_produto;
    
    public $codigo;
    
    public $descricao;
    
    public $preco;

    public function __construct ()
    {
        $this->id_produto = 0;
        $this->codigo = '';
        $this->descricao = "";
        $this->preco = "";
    }
}
