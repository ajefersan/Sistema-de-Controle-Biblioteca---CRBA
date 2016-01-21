<?php

	if(isset($_POST['nClassificacao'])){
		
		$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
		$nomeTabela = filter_input(INPUT_POST, 'tabela',FILTER_SANITIZE_STRING);
		$classificacao = filter_input(INPUT_POST,'nClassificacao',FILTER_SANITIZE_STRING);
		$tombamento = filter_input(INPUT_POST,'nTombamento',FILTER_SANITIZE_NUMBER_INT);
		$codigoTitulo = filter_input(INPUT_POST,'nCodigo',FILTER_SANITIZE_NUMBER_INT);
		$titulo = filter_input(INPUT_POST,'nTitulo',FILTER_SANITIZE_STRING);
		$autor = filter_input(INPUT_POST,'nAutor',FILTER_SANITIZE_STRING);
		$localPublicacao = filter_input(INPUT_POST,'nLocal',FILTER_SANITIZE_STRING);
		$editora = filter_input(INPUT_POST,'nEditora',FILTER_SANITIZE_STRING);
		$anoPublicacao = filter_input(INPUT_POST,'nAno',FILTER_SANITIZE_NUMBER_INT);




		if(empty(array_filter($_POST))){
			$mensagem = "Todos os campos são obrigatorios";

		}
		else{

			$atributos = [
				'classificacao' => $classificacao,
				'tombamento' => $tombamento,
				'codigo_titulo' => $codigoTitulo,
				'titulo' => $titulo,
				'autor'=> $autor,
				'local_publicacao' => $localPublicacao,
				'editora' => $editora,
				'ano_publicacao' => $anoPublicacao

				

			];
			
			$atualizar = atualizar($id,$nomeTabela,$atributos);
			$mensagem = ($atualizar) ? " atualizado com sucesso!" :  var_dump($nomeTabela);



	}


}

	?>