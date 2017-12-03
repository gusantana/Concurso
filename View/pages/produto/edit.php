<?php

?>
<!DOCTYPE>
<html>
	<head>
		<meta charset='utf-8'>
		<script type="text/javascript" src="View/js/index.js"></script>
		<script>
			index.init();
		</script>
		<title>Estudo para o Concurso da Ufmt</title>
	</head>
<body>
	<fieldset>
		<legend>
			<span>Cadastro de produtos</span>
        </legend>
        <a href="/concurso/index.php">
            <button type="button" value="Voltar">Voltar</button>
        </a>
        <form action="/concurso/edit.php" method="post">
            <input type="hidden" name='acao' value='excluir'>
            <input type="hidden" name='id_produto' value="<?php echo $produto->id_produto ?>">
            <button type="submit">Excluir</button>
        </form>
		<form action="/concurso/edit.php" method="post" id="form">
            <input type="hidden" name="acao" value="salvar">
            <input type="hidden" name='id_produto' value="<?php echo $produto->id_produto ?>">

			<div>
				<label for="codigo">C&oacute;digo</label>
				<input id="codigo" type="text" name="codigo" value="<?php echo $produto->codigo ?>">
			</div>
			
			<br>
			<div class="clearfix"></div>
			
			<div>
				<label for="descricao">Descri&ccedil;&atilde;o</label>
				<input id="descricao" type="text" name="descricao" value="<?php echo $produto->descricao ?>">
			</div>
			
			<br>
			<div class="clearfix"></div>
			
			<div>
				<label for="preco">Pre&ccedil;o</label>
				<input id="preco" type="text" name="preco" value="<?php echo $produto->preco ?>">
			</div>
			
			<br>
			<div class="clearfix"></div>
			
			<div>
				<label for="enviar">&nbsp;</label>
				<input id="enviar" type="submit" value="Salvar">
			</div>
			
		</form>
	</fieldset>
</body>
</html>