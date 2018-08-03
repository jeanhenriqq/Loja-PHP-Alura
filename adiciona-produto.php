<?php include("header.php"); 
	  include("connect.php"); 
 	  include("banco-produto.php"); 

		$nome = $_GET['nome']; 
		$preco = $_GET['preco'];
		

		if(insereProduto($connection, $nome, $preco)) { //Manda executar a query 
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
