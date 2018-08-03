<?php include("header.php") ?>
			
	<form action="adiciona-produto.php" class="col-sm-3">
		<div class="form-group"> 
		    <label for="formGroupExampleInput">Adicione um produto</label>
		    <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Produto">
		</div>

		<div class="input-group ">
		    <div class="input-group-prepend">
		    	<span class="input-group-text">$</span>
			</div>
		    <input type="text" name="preco" class="form-control" aria-label="Preço">
		</div>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>

<?php require("footer.php") ?>