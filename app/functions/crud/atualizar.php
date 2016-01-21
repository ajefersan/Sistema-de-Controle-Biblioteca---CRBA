<?php


	function atualizar($id, $tabela, $atributos ){

		$pdo = conectar();

		$values = null;

		foreach ($atributos as $key => $value) {
			$values .=$key.'= :'.$key.',';

		}

		$values = (rtrim($values,','));

		$atualizar = $pdo->prepare("update $tabela set $values where id = $id");
		return $atualizar->execute($atributos);



	}