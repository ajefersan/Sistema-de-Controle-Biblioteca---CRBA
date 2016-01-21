<p><h3>Cadastro de Itens Biblioteca  - CRBA</h3></p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/jQuery.js"></script>
<script type="text/javascript">

	
	$(document).ready(function() {
    $('select').material_select();
  });
</script>

<form class="s12" action="" method="post">

	<div class="rol">
		<div class="input-field col s12">
			<select name="nomeTabela">
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
			<input type="text" placeholder="Classificacao" name="classificacao" class="validate">
			
		</div>

		<div class="input-field col s6">
			<input type="text" placeholder="Tombamento (Somente números)" name="tombamento" class="validate">
			
		</div>

		<div class="input-field col s6">
			<input type="text" placeholder="Codigo do Titulo (Somente números)" name="codigo_titulo" class="validate">
			
		</div>

		<div class="input-field col s6">
			<input type="text" placeholder="Titulo" name="titulo" class="validate">
			
		</div>

		<div class="input-field col s6">
			<input type="text" placeholder="Autor" name="autor" class="validate">
			
		</div>

		<div class="input-field col s6">
			<input type="text" placeholder="Local da Publicação" name="local_publicacao" class="validate">
			
		</div>

		<div class="input-field col s6">
			<input type="text" placeholder="Editora" name="editora" class="validate">
			
		</div>

		<div class="input-field col s6">
			<input type="text" placeholder="Ano da Publicação (Somente números)" name="ano_publicacao" class="validate">
			
		</div>

		<div class="input-field col s6">
			<input type="text" placeholder="Quantidade de exemplares (Somente números)" name="qtd_exemplares" class="validate">
			
		</div>
	</div>

	<div class="input-field col s6">
			<button class="blue darken-4 btn" type="submit">Cadastrar</button>
		</div>
</form>