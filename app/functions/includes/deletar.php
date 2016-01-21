<?php
	
	if(isset($_GET['excluir']) AND $_GET['excluir'] == true){

		$id = filter_input(INPUT_GET,'id' ,FILTER_SANITIZE_NUMBER_INT);
		$tabela = filter_input(INPUT_GET,'nomeT' ,FILTER_SANITIZE_STRING);
		$registroExcluido = deletar($id,"id",$tabela);

		$mensagem = ($registroExcluido) ? "Registro Excluido com sucesso" : "Erro ao tentar excluir";
	};