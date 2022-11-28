<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Informações</h2>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
          ?>
		  
		  <article>
		  
				<table border="1">
					<tr>
						<td>Nome</td>
						<td>Apelido</td>
					</tr>
                    <?php

						include "includes/conecta.php";
						$sql = "SELECT id, nome, apelido FROM usuarios";

						$res = mysqli_query($conn, $sql);

						if($res){
							while($row = mysqli_fetch_assoc($res)){

								echo "<tr>
										<td>". $row['nome'] ."</td>
										<td>". $row['apelido'] ."</td>
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
		