<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Cadastro de objetos</h2>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
          ?>
		  
		  <article>
		  
          <div>
              <button>
                  <a href="cadastrarobjetos.php">Cadastrar novo objeto</a>
              </button>
          </div>
		  
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>Localização</td>
                        <td>Categoria</td>
						<td> - </td>
						<td> - </td>
					</tr>
                    <?php

						include "includes/conecta.php";
						$sql = "SELECT id, nome, localiza, categoria FROM objetos";

						$res = mysqli_query($conn, $sql);

						if($res){
							while($row = mysqli_fetch_assoc($res)){

								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['nome'] ."</td>
										<td>". $row['localiza'] ."</td>
										<td>". $row['categoria'] ."</td>
										<td><a href='cadastrarobjetos.php?id=". $row['id'] ."'>Editar</a></td>
										<td><a href='excluiobjetos.php?id=". $row['id'] ."'>Excluir</a></td>
									</tr>";

							}
						}

                    ?>
				</table>
		  </article>
		</section>
<?php

	include "includes/rodape.php";
	
?>
		