<?php

	include "includes/topo.php";

?>
	
<head>
    <link rel="stylesheet" href="css/estilo.css" />
</head>
		<header>
		  <h2>Painel inicial</h2>
		</header>

		<section>
		  		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
			Bem-vindo usuário <?php echo $_SESSION['nome']; ?>!<br/><br/><br/><br/>
		
		
		
          <a href="logout.php" class="saida">Sair</a>
		  </article>
		</section>

<?php

	include "includes/rodape.php";
	
?>