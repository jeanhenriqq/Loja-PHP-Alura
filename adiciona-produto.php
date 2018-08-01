<?php include("header.php") ?>

	<?php 
		$nome = $_GET['nome']; 
		$preco = $_GET['preco'];
		$connection = mysqli_connect('localhost', 'root', '', 'loja'); //Abre a conexão com o BD.

		$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})"; //Passa a query que queremos inserindo na tabela onde queremos
		
		if(mysqli_query($connection, $query)) { //Manda executar a query 
		?> 
			<p class="alert alert-success" role="alert">Produto <?= $nome ?>, custando R$ <?= $preco ?> adicionado.</p>
		<?php	} else { 
		?>
			<p class="alert alert-danger" role="alert"> Produto <?= $nome ?>, não foi adicionado.</p>
		<?php
		}

		mysqli_close($connection); //Fecha a conexão - Teoricamente, o php ja fecha a conexão, não sendo preciso essa linha

	?>

<?php include("footer.php") ?>
