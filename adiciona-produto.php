<?php include("header.php"); 
	  include("connect.php"); 
 	  include("banco-produto.php"); 

		$nome = $_POST['nome']; 
		$preco = $_POST['preco'];
		$descricao = $_POST['descricao'];
		$categoria_id = $_POST['categoria_id'];
		if(array_key_exists('usado', $_POST)) {
			$usado = "true";
		} else {
			$usado = "false";
		}
		

		if(insereProduto($connection, $nome, $preco, $descricao, $categoria_id, $usado)) { //Manda executar a query 
			?> 
				<p class="alert alert-success" role="alert">Produto <?= $nome ?>, custando R$ <?= $preco ?> adicionado.</p>
			<?php	} 
			else { 
				$errorMsg = mysqli_error($connection);
			?>
				<p class="alert alert-danger" role="alert"> Produto <?= $nome ?>, não foi adicionado.<br> <?= $erroMsg?> </p>
			<?php
		}

		mysqli_close($connection); //Fecha a conexão - Teoricamente, o php ja fecha a conexão, não sendo preciso essa linha

	?>

<?php include("footer.php"); ?>
