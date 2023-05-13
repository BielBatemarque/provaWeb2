<?php
	include '../base.php';
	include_once DIR_BASE.'/dao/contatoDAO.php';
	include_once DIR_BASE.'/model/contato.php';

	$DAOContato = new ContatoDAO();
	$deleteID = $DAOContato->excluirContato($_GET['id']);
	
	if($deleteID == true){
		header("location: ../views/paginalistarMensagens.php");
	}else{
		echo "Problema ao remover. Tente novamente!";
	}
?>