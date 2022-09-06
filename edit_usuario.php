<?php
session_start();
include_once("conexao.php");
include('protect.php');
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="base.css" rel="stylesheet">
		<title>Editar Usuario</title>		
	</head>
	<body>
	<form>
        <a href="painel.php">
            <input type="button" value="HUB">
            </a>
            <a href="lista_usuario.php">
        <input type="button" value="Lista Usuario">
        </a>
         </form>
	<div class="box">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
		<fieldset>
		<legend><b>Edição Usuario</b></legend>
		<input type="hidden" name="id" class="inputUser" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" class="inputUser" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" class="inputUser" value="<?php echo $row_usuario['email']; ?>"><br><br>

            <label>Telefone: </label>
			<input type="text" name="telefone" class="inputUser" value="<?php echo $row_usuario['telefone']; ?>"><br><br>

            <label>Data de Nascimento: </label>
			<input type="date" name="data_nascimento" class="inputUser" value="<?php echo $row_usuario['data_nascimento']; ?>"><br><br>

            <label>login: </label>
			<input type="text" name="login" class="inputUser" value="<?php echo $row_usuario['login']; ?>"><br><br>


			<input type="submit" id ="submit" value="Editar">
	</fildset>
		</form>
	</div>
	</body>
</html>