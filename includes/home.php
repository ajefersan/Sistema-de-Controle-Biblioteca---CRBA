
<h3>Escolha o item que deseja listar</h3>
<form class="s12" action="" name="nomeT" method="post">

	<div class="rol">
		<div class="input-field col s12">
			<select name="nomeT">
				<optgroup>
					<option value="" disabled selected>Escolha um item</option>
					<option value="cd" name="cd">CD</option>
					<option value="dvd" name="dvd">DVD</option>
					<option value="enciclopedia" name="enciclopedia">ENCICLOPEDIA</option>
					<option value="folheto" name="folheto">FOLHETO</option>
					<option value="jornais" name="jornais">JORNAL</option>
					<option value="livros" name="livros">LIVRO</option>
					<option value="monografia" name="monografia">MONOGRAFIA</option>
					<option value="relatorios" name="relatorios">RELATORIO</option>
					<option value="revistas" name="revistas">REVISTA</option>
					<option value="teses" name="teses">TESE</option>
					
				</optgroup>
			</select>
	</div>



	<div class="input-field col s6">
			<button class="green darken-2 btn" type="submit">Listar</button>
	</div>
</form>
<br>

	<?php

		if(isset($_POST['nomeT'])){
			$tabela = filter_input(INPUT_POST,'nomeT',FILTER_SANITIZE_STRING);
			

	?>

<table class="striped">
	<thead class="thead">
		<tr>
			<td>Classificação</td>
			<td>Tombamento</td>
			<td>Codigo Titulo</td>
			<td>Titulo</td>
			<td>Autor</td>
			<td>Local Publicacao</td>
			<td>Editora</td>
			<td>Ano Publicacao</td>
			<td>Excluir</td>
			<td>Editar</td>

		</tr>
	</thead>
	<tbody>
		<?php 
			$listarClientes = listar($tabela);
			$cliente2 = null;
			foreach ($listarClientes as $cliente ) :
		?>

		<tr>
			<td><?php echo $cliente->classificacao; ?> </td>
			<td><?php echo $cliente->tombamento; ?> </td>
			<td><?php echo $cliente->codigo_titulo; ?> </td>
			<td><?php echo $cliente->titulo; ?> </td>
			<td><?php echo $cliente->autor; ?> </td>
			<td><?php echo $cliente->local_publicacao; ?> </td>
			<td><?php echo $cliente->editora; ?> </td>
			<td><?php echo $cliente->ano_publicacao; ?> </td>
			<td> 
					<a href="?excluir=true&id=<?php echo $cliente->id;?>&nomeT=<?php echo $tabela?>"  class="red darken-6 btn"><i class="mdi-action-highlight-remove" style="font-size:30px;"></i></a>
			</td>
			<td> 
					<button class="red darken-6 btn editar" type="button"><i class="mdi-editor-mode-edit" style="font-size:30px;"></i></button>


							
			</td>
			<BR>
			
				
				
		
		</tr>
		<tr class="edit" style="visibility:collapse;">
			<form method="post" action="">
				<td><input name="nClassificacao"type="text" value="<?php echo $cliente->classificacao; ?>"></td>
				<td><input name="nTombamento"type="text" value="<?php echo $cliente->tombamento; ?>"></td>
				<td><input name="nCodigo"type="text" value="<?php echo $cliente->codigo_titulo; ?>"></td>
				<td><input name="nTitulo"type="text" value="<?php echo $cliente->titulo; ?> "></td>
				<td><input name="nAutor"type="text" value="<?php echo $cliente->autor; ?>"></td>
				<td><input name="nLocal"type="text" value="<?php echo $cliente->local_publicacao; ?>"></td>
				<td><input name="nEditora"type="text" value="<?php echo $cliente->editora; ?>"></td>
				<td><input name="nAno"type="text" value="<?php echo $cliente->ano_publicacao; ?>"></td>
				<input style="display:none;" name="id"type="text" value="<?php echo $cliente->id ;?>">
				<input style="display:none;"name="tabela"type="text" value="<?php echo $tabela; ?>">
				<td>
					<button class="red darken-6 btn" type="submit"><i class="mdi-navigation-check" style="font-size:30px;"></i></button>

					
					<!-- <a href="?editar=true&id=<?php echo $cliente->id;?>&nomeT=<?php echo $tabela?>"  class="red darken-6 btn"><i class="mdi-action-highlight-remove" style="font-size:30px;"></i></a> 

							
					-->
				

				</td>
			</form>
		</tr>
		
			<?php endforeach;}?>
	</tbody>

</table>
