<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo.css" />
    <title></title>
</head>
<body>
    <header>
        <h1>Página de login</h1>
    </header>

    <ul>
        <li><a href="index.php">Página Inicial</a></li>
        <li><a href="#news">Notícias</a></li>
        <li><a href="#contact">Contato</a></li>
        <li style="float:right"><a href="PaginaCadastro.php">Cadastre-se</a></li>
        <li style="float:right"><a class="active" href="PaginaLogin.php">Login</a></li>
    </ul>

    <?php

				//Se foi enviado parâmetro de erro - se não autenticou
				if(isset($_GET['erro'])){
					echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
				}

				if(isset($_GET['autentica'])){
					echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
				}

    ?>

    <form method="post" action="login.php" name="processologin">
    <table border="0" cellpadding="5" cellspacing="5" class="registro" width="300px" align="left">
    <tr>
        <td colspan="2" height="25">
        <h4 style="text-align:center">Efetuar login de usuário:</h4>
        </td>
    </tr>
    <tr>
        <td colspan="2" height="25">
        <b>Dados do usuário:</b>
        </td>
    </tr>
    <tr>
        <td width="30%" height="25">Apelido:</td>
        <td colspan="2" height="10">    
            <input type="text" name="login" placeholder="Apelido" />
        </td>
    </tr>
    <tr>
        <td width="30%" height="25">Senha:</td>
        <td colspan="2" height="10">
            <input type="password" name="senha" placeholder="Senha" />
        </td>
    </tr>
    <tr>
        <td height="30" align="right" width="20%"></td>
        <td height="30" align="right">
            <input type="submit" value="Enviar" style="margin-right: 40px"/>
        </td>
    </tr>
    </table>
    </form>

</body>
</html>
<?php

include "includes/rodape.php"

?>