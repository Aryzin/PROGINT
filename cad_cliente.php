<?php
session_start();
include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastrar Cliente</title>
        <link href="base.css" rel="stylesheet">		
	</head>
	<body>
        <form>
            <a href="painel.php">
            <input type="button" value="HUB">
            </a>
            <a href="lista_cliente.php">
        <input type="button" value="Lista Cliente">
        </a>
         </form>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?><div class="box">
            <form method="POST" action="proc_cad_cliente.php">
        <fieldset>
            <legend><b>Cadastro Cliente</b></legend>
            <div class="inputBox">
			<label>Nome: </label>
			<input type="text" name="nome"class="inputUser"><br><br>
			</div>
            <div class="inputBox">
			<label>Email: </label>
			<input type="email" name="email"class="inputUser"><br><br>
            </div>
            <div class="inputBox">
            <label>Telefone: </label>
			<input type="tel" name="telefone"class="inputUser"><br><br>
            </div>
            <div class="inputBox">
            <label>Data de Nascimento: </label>
			<input type="date" name="data_nascimento"class="inputUser"><br><br>
            </div>
            <div class="inputBox">
            <label>Endereço: </label>
			<input type="text" name="endereco"class="inputUser"><br><br>
            </div>
        </fildset>
        <input type="submit" id ="submit" name="submit" value="Cadastrar">
            </div>
		</form>
	</body>
</html>