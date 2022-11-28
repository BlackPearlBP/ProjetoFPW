<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$localiza = $_POST['localiza'];
	$categoria = $_POST['categoria'];

	if(empty($id)){
	
		$sql = "INSERT INTO objetos (nome, localiza, categoria) 
					VALUES 
				('$nome', '$localiza', '$categoria')";
		
		$res = mysqli_query($conn, $sql);
		
		if($res){
			header("Location: listaobjetos.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
		
		$sql = "UPDATE objetos SET
					nome = '$nome',
					localiza = '$localiza',
					categoria = '$categoria'
				WHERE
					id = $id";
					
		$res = mysqli_query($conn, $sql);
		
		if($res){
			header("Location: listaobjetos.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
		
	}
	
?>