<?php

	$atributos = [
				'cd' ,
				'dvd' ,
				'enciclopedia' ,
				'folheto' ,
				'jornais',
				'livros' ,
				'monografia' ,
				'relatorios',
				'revistas',
				'teses' 
];

?>



<table class="striped">
	<thead class="thead">
		<tr>
			<td >CD</td>
			<td>DVD</td>
			<td>ENCICLOPEDIA</td>
			<td>FOLHETO</td>
			<td>JORNAIS</td>
			<td>LIVROS</td>
			<td>MONOGRAFIA</td>
			<td>RELATORIOS</td>
			<td>REVISTAS</td>
			<td>TESES</td>

		</tr>
	</thead>
	<tbody>

		<tr class="tdB">
			<td><?php echo quantidadeTotalItens($atributos[0]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[1]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[2]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[3]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[4]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[5]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[6]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[7]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[8]);?></td>
			<td><?php echo quantidadeTotalItens($atributos[9]);?></td>
			

		</tr>
		

	</tbody>
		
		
	<tfoot>
		
			QUANTIDADE TOTAL  &nbsp &nbsp &nbsp &nbsp <?php echo totalRegistros($atributos);?> 
		
	</tfoot>





</table>