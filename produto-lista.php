<?php include("header.php");
	  include("connect.php");
	  include("banco-produto.php"); ?>

<?php 
	if(array_key_exists("removido", $_GET) && $_GET["removido"]==="true" ){
?>
		<p class="alert-success">Produto removido com sucesso.</p>
<?php
	}
?>

<div class="table-responsive">
	<table class="table table-bordered table-hover">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Produto</th>
	      <th scope="col">Preço</th>
	      <th scope="col">Descrição</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	<?php	
		$produtos = listaProdutos($connection);
		foreach ($produtos as $produto) : //Os dois pontos aqui e o "endforeach" no final do código, substituem as chaves {}
	?>
	  <tbody>
		<tr>
			<td><?=$produto['nome'] ?></td> 
			<td><?=$produto['preco'] ?></td>
			<td><?= substr($produto['descricao'], 0, 50) ?></td>
			<td><a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">Remover</a></td>
		</tr>
	<?php
	endforeach


	?>
	  </tbody>
	</table>
</div>

<?php include("footer.php"); ?>
