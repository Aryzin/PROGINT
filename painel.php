<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="logadin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB</title>
</head>
<body>
<form>
            <a href="logout.php">
            <input type="button" value="Sair">
            </a>
         </form>
    <div class="box">
                <legend><b>Bem vindo ao Ary's System, <?php echo $_SESSION['nome']; ?>.</b></legend>
                <br>
                <div class="content">
                <form>
                <a href="lista_usuario.php">
                <input class = "button" type="button" value="Listar Usuarios">
                 </a>
                </form>
                <form>
                <a href="cad_usuario.php">
                <input class = "button" type="button" value="Cadastrar Usuario">
                 </a>
                </form>
                <form>
                <a href="lista_cliente.php">
                <input class = "button" type="button" value="Listar Clientes">
                 </a>
                </form>
                <form>
                <a href="cad_cliente.php">
                <input class = "button" type="button" value="Cadastrar Clientes">
                 </a>
                </form>
                </div>
    </div>
</body>
</html>