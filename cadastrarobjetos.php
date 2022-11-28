<?php

	include "includes/topo.php";

	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$localiza = "";
	$categoria = "";
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM objetos WHERE id = $id";
		$res = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($res);
		
		$nome = $row['nome'];
		$localiza = $row['localiza'];
		$categoria = $row['categoria'];
		
	}

?>

	
		<header>
		  <h2>Cadastro de objetos</h2>
		</header>
		
		<section>
		  		  <?php 
		  
			include "includes/menu.php";
			
                    ?>
		  

		  <article>
			  <form method="post" action="recebeobjeto.php">
				<table border="0" cellpadding="5" cellspacing="5" class="registro" width="300px" align="left">
				 <tr>
					<td colspan="2" height="25">
					<h4 style="text-align: center">Efetuar cadastro de novo objeto:</h4>
				</td>
			</tr>
			<tr>
				<td colspan="2" height="25">
				<b>Dados do objeto:</b>
				</td>
			</tr>
					<tr>
						<td>
						<input type="hidden" name="id" value="<?php echo $id; ?>" />
						</td>
					</tr>
			<tr>
				<td width="30%" height="25">Nome do objeto:</td>
				<td colspan="2" height="10">    
					<input type="text" name="nome" value="<?php echo $nome; ?>" />
			    </td>
			</tr>
			<tr>
				<td width="30%" height="25">Onde está o objeto:</td>
				<td colspan="2" height="10">
					<input type="text" name="localiza" value="<?php echo $localiza; ?>" />
				</td>
			</tr>
			<tr>
				<td width="30%" height="25">Categoria:</td>
				<td colspan="2" height="10">
					<select name="categoria">
					<option value="Eletro" <?php if($categoria=='E'){echo "selected";}?> >Eletro</option>
					<option value="Manual" <?php if($categoria=='M'){echo "selected";}?> >Manual</option>
					</select>
				</td>
			</tr>    
			<tr>
				<td height="60" valign="bottom" width="20%"></td>
				<td height="30" valign="bottom">
					<input type="submit" value="Enviar" />&nbsp;&nbsp;&nbsp;
					<input type="reset" value="Limpar tudo" />
				</td>
			</tr>
			</table>
			
			</form>
			<button>
			  <a href="listaobjetos.php">Voltar</a>
			</button>
		  </article>
		</section>

<?php

	include "includes/rodape.php";
	
?>