<?php include("header.php") ?>
			
	<form action="adiciona-produto.php">
		<div class="form-group row"> 
		    <label for="nomeProduto" class="col-sm-1 col-form-label">Nome:</label>
		    <div class="col-sm-5">
		    	<input type="text" name="nome" class="form-control" id="nomeProduto" placeholder="Produto">
	    	</div>
		</div>

		<div class="form-group row">
		    <label for="precoProduto" class="col-sm-1 col-form-label">Preço:</label>
		    <div class="input-group col-sm-5">
			    <div class="input-group-prepend">
			    	<span class="input-group-text">R$</span>
				</div>
			    <input type="text" name="preco" id="precoProduto" class="form-control" aria-label="Preço" placeholder="0.00">
			</div>
		</div>
		<div class="form-group row">
		    <label for="descricaoProduto" class="col-sm-1 col-form-label">Descrição:</label>
		    <div class="input-group col-sm-5">
			    <textarea type="text" name="descricao" id="descricaoProduto" class="form-control" aria-label="Descrição"></textarea>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-5 offset-sm-1">
			<button type="submit" class="btn btn-primary col-sm-12" value="Submit">Cadastrar</button>
		</div>
		</div>
	</form>

<?php require("footer.php") ?>