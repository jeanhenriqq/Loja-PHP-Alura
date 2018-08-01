<?php include("header.php") ?>
			
	<form action="adiciona-produto.php">
		<label for="nome">Nome: </label><input type="text" name="nome"><br/>
		<label for="preco">Preço: </label><input type="number" name="preco"><br/>
		<input type="submit" value=cadastrar>
	</form>

<?php require("footer.php") ?>