<?php

	function deletar($id, $campo,$tabela){

		$pdo = conectar();

		$deletar = $pdo->prepare("delete from $tabela where $campo = $id ");
		 return $deletar->execute();


	}

	?>