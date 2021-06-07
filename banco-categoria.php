<?php

	function ListaCategoria($conexao) {
	$categorias= array();
	$query= "select * from  kategorias";
	$resultado= mysqli_query($conexao, $query);
	while ($categoria= mysqli_fetch_assoc($resultado)) {
		array_push($categorias, $categoria);
	}

	return($categorias);
}