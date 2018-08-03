<?php include("header.php"); 
	  include("connect.php"); 
 	  include("banco-produto.php"); 

$id = $_GET['id'];
removeProduto($connection, $id);
header("Location: produto-lista.php?removido=true");
die();
?>