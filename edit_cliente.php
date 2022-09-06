<?php
session_start();
include_once("conexao.php");
include('protect.php');
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM cliente WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <link href="base.css" rel="stylesheet">
		<title>Editar Cliente</title
        >		
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
	<div class="box">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_cliente.php">
		<fieldset>
		<legend><b>Edição Cliente</b></legend>
			<input type="hidden" name="id" class="inputUser" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" class="inputUser" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" class="inputUser" value="<?php echo $row_usuario['email']; ?>"><br><br>

            <label>Telefone: </label>
			<input type="text" name="telefone" class="inputUser" value="<?php echo $row_usuario['telefone']; ?>"><br><br>

            <label>Data de Nascimento: </label>
			<input type="date" name="data_nascimento" class="inputUser" value="<?php echo $row_usuario['data_nascimento']; ?>"><br><br>

            <label>Endereço: </label>
			<input type="text" name="endereco" class="inputUser" value="<?php echo $row_usuario['endereco']; ?>"><br><br>
            
			
			<input type="submit" id="submit" value="Editar">
	</fildset>
		</form>
	</div>
	</body>
</html>