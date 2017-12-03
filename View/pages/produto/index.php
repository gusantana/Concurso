<!DOCTYPE>
<html>
	<head>
		<title>
			Lista de Produtos
		</title>
	</head>
	<body>
		<fieldset>
            <legend>Lista de Produtos</legend>
            <a href="/concurso/edit.php";>
                <button>Cadastrar</button>
            </a>
			<form action="edit.php" method="get">
				<table border="1px groove;">
					<thead>
						<th class="">#</th>
						<th class="">Código</th>
						<th class="">Descrição</th>
						<th class="">Preço</th>
						<th class="">Ação</th>
					</thead>
					<tbody>
                        <?php
                            foreach ($listaProdutos as $key => $produto) : ?>
                        <tr>
                            <td><?php echo ((int)$key) + 1; ?></td>
                            <td><?php echo $produto->codigo; ?></td>
                            <td><?php echo $produto->descricao; ?></td>
                            <td>R$ <?php echo $produto->preco; ?></td>
                            <td><button type="submit" name="id" value="<?php echo $produto->id_produto; ?>">Editar</button></td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                    </tbody>
                </table>
            </form>
        </fieldset>
    </body>
</html>