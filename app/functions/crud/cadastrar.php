<?php

	function cadastrar($tabela, $atributos){
		//conecta com o banco
		$pdo = conectar();

		////pega o indice dos arrays
		$keys = array_keys($atributos);

		
		//transforma o array em string
		$camposTabela = implode(',',$keys);


		//incia a variavel do looping 
		$values = null;


		//looping para colocar os dois pontos(:) apos cada campo da tabela da string
		foreach ($keys as $key) {
			$values.= ", :".$key; 
		}
		//tira os espaçoes em branco e a primeira virgula 
		$values = (trim(ltrim($values,',')));

		//prepara a query
		$cadastrar = $pdo->prepare("insert into $tabela($camposTabela) values($values)");

		//executa a query;
		return $cadastrar->execute($atributos);

		//return $conn->lastInsertId();


		


	}