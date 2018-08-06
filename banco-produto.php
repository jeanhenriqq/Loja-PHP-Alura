<?php
function listaProdutos($connection) {
	$produtos = array();
	$resultado = mysqli_query($connection, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
	while($produto = mysqli_fetch_assoc($resultado)){
		array_push($produtos, $produto);
	}
	return $produtos;
}

function insereProduto($connection, $nome, $preco, $descricao, $categoria_id, $usado){
	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', '{$categoria_id}', '{$usado}')"; //Passa a query que queremos inserindo na tabela onde queremos
	return mysqli_query($connection, $query);
}

function removeProduto($connection, $id){
	$query = "delete from produtos where id = {$id}";
	return mysqli_query($connection, $query);
}