<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>Cadastro para novos usuários</h1>
    </header>

    <ul>
        <li><a href="index.php">Página Inicial</a></li>
        <li><a href="#news">Notícias</a></li>
        <li><a href="#contact">Contato</a></li>
        <li style="float:right"><a class="active" href="PaginaCadastro.php">Cadastre-se</a></li>
        <li style="float:right"><a href="PaginaLogin.php">Login</a></li>
    </ul>

    <form method="post" action="cadastrousuario.php" name="cadastro">
    <table border="0" cellpadding="5" cellspacing="5" class="registro" width="300px" align="left">
    <tr>
        <td colspan="2" height="25">
        <h4 style="text-align: center">Efetuar cadastro de novo usuário:</h4>
        </td>
    </tr>
    <tr>
        <td colspan="2" height="25">
        <b>Dados do usuário:</b>
        </td>
    </tr>
    <tr>
        <td width="30%" height="25">Nome completo:</td>
        <td height="25">
            <input type="text" name="nome" placeholder="Nome completo" required/>
        </td>
    </tr>
    <tr>
        <td width="30%" height="25">Apelido:</td>
        <td colspan="2" height="10">    
            <input type="text" name="apelido" placeholder="Apelido para login" required/>
        </td>
    </tr>
    <tr>
        <td width="30%" height="25">Senha:</td>
        <td colspan="2" height="10">
            <input type="password" name="senha" placeholder="Crie uma senha" required/>
        </td>
    </tr>
    <tr>
        <td width="30%" height="25">Confirme a senha:</td>
        <td colspan="2" height="10">
            <input type="password" name="confirmasenha" placeholder="Confirme sua senha" required/>
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

</body>
</html>
<?php

include "includes/rodape.php"

?>