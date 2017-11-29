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
		<form action="Controller/Index.php" method="post" id="form">
			<input type="hidden" name="acao" value="salvar">
			<div>
				<label for="codigo">C&oacute;digo</label>
				<input id="codigo" type="text" name="codigo">
			</div>
			
			<br>
			<div class="clearfix"></div>
			
			<div>
				<label for="descricao">Descri&ccedil;&atilde;o</label>
				<input id="descricao" type="text" name="descricao">
			</div>
			
			<br>
			<div class="clearfix"></div>
			
			<div>
				<label for="preco">Pre&ccedil;o</label>
				<input id="preco" type="text" name="preco">
			</div>
			
			<br>
			<div class="clearfix"></div>
			
			<div>
				<label for="enviar">&nbsp;</label>
				<input id="enviar" type="submit" value="Cadastrar">
			</div>
			
		</form>
	</fieldset>
</body>
</html>