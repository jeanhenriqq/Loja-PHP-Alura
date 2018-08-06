<?php 

function listaCategorias($connection){
	$categorias = array();
	$query = "select * from categorias";
	$resultado = mysqli_query($connection, $query);
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias, $categoria);
	}

	return $categorias;
}