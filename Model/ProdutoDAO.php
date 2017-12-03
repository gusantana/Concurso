<?php 
require_once "ConnectionManager.php";
require_once "ProdutoDAO.php";

class ProdutoDAO {
    
    public function consultar ($filtro = [])
    {
        $con = new ConnectionManager();
        $separador = "";
        $parametros = [];
        $where = "";

        $sql = "SELECT 
                id_produto,
                codigo,
                descricao,
                preco
                
                FROM produto
                ";
        
        if (isset($filtro['id_produto'])) {
            $where .= " $separador id_produto = :id_produto";
            $parametros[':id_produto'] = $filtro['id_produto'];
            $separador = "AND";
        }

        if (isset($filtro['codigo'])) {
            $where .= " $separador codigo = :codigo";
            $parametros[':codigo'] = $filtro['codigo'];
            $separador = "AND";
        }
        
        if (isset($filtro['descricao'])) {
            $where .= " $separador descricao = :descricao";
            $parametros[':descricao'] = $filtro['descricao'];
            $separador = "AND";
        }
        
        if (isset($filtro['preco'])) {
            $where .= " $separador preco = :preco";
            $parametros[':preco'] = $filtro['preco'];
            $separador = "AND";
        }

        if (!empty($where)) {
            $sql .= " WHERE $where";
        }

        $stmt = $con->prepare($sql);
        $stmt->execute($parametros);

        $resultado = [];
        while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            $resultado [] = $row;
        }

        return $resultado;
    }
    
    public function salvar(Produto $produto) 
    {
        $con = new ConnectionManager ();
        $sql = "INSERT INTO produto (codigo, descricao, preco) VALUES (:codigo, :descricao, :preco)";

        $parametros = [
            ":codigo"   => $produto->codigo,
            ":descricao" => $produto->descricao,
            ":preco"    => $produto->preco
        ];

        if (!empty ((int) $produto->id_produto)) {
            $sql = "UPDATE produto set codigo = :codigo, descricao = :descricao, preco = :preco WHERE id_produto = :id_produto";
            $parametros['id_produto'] = $produto->id_produto;
        }

        $stmt = $con->prepare($sql);

        $stmt->execute($parametros);

        $id = $con->lastInsertId('');

        if (! empty((int) $id)) {
            $produto->id_produto = $id;
        }

        return $produto;
    }


    public function excluir (Produto $produto)
    {
        $con = new ConnectionManager ();
        $sql = "DELETE FROM produto WHERE id_produto = :id_produto";

        $parametros = [
            ":id_produto"   => $produto->id_produto
        ];

        $stmt = $con->prepare($sql);

        return $stmt->execute($parametros);
    }
}