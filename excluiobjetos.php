<?php

	include "includes/conecta.php";
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM objetos WHERE id = $id";
	
	$res = mysqli_query($conn, $sql);
	
	header("Location: listaobjetos.php");