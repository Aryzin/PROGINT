<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM cliente WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Cliente apagado com sucesso</p>";
		header("Location: lista_cliente.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o cliente não foi apagado com sucesso</p>";
		header("Location: lista_cliente.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um cliente</p>";
	header("Location: lista_cliente.php");
}
