<?php
function listaProdutos($connection) {
	$produtos = array();
	$resultado = mysqli_query($connection, "select * from produtos");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($connection, $nome, $preco, $descricao){
	$query = "insert into produtos (nome, preco, descricao) values ('{$nome}', {$preco}, '{$descricao}')"; //Passa a query que queremos inserindo na tabela onde queremos
	return mysqli_query($connection, $query);
}

function removeProduto($connection, $id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($connection, $query);
}