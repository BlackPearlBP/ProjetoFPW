<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$apelido = $_POST['apelido'];
	$senha = $_POST['senha'];
	
	if(empty($id)){
	
		$sql = "INSERT INTO usuarios (nome, apelido, senha) 
					VALUES 
				('$nome', '$apelido', '$senha')";
		
		$res = mysqli_query($conn, $sql);

		if($res){
			header("Location: listausuarios.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
		
		$sql = "UPDATE usuarios SET
					nome = '$nome',
					apelido = '$apelido',
					senha = '$senha'
				WHERE
					id = $id";
					
		$res = mysqli_query($conn, $sql);
		
		if($res){
			header("Location: listausuarios.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
		
	}
	
?>