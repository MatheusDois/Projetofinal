<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_clientes");
while($registros = $querySelect->fetch_assoc()):
	$id = $registros['id'];
	$nome = $registros['nome'];
	$email = $registros['email'];
	$telefone = $registros['telefone'];
	$plano = $registros['plano'];
	$personal = $registros['personal'];
	$ENDERECO = $registros['ENDERECO'];

	echo "<tr>";
	echo "<td>$nome</td>
		<td>$email</td>
		<td>$telefone</td>
		<td>$plano</td> 
		<td>$personal</td>
		<td>$ENDERECO</td>
	<td><a href='editar.php?id=$id'>
	<i class='material-icons'>edit</i></a></td>
	 <td>
	 <a onclick=\"myFunction($id)\" style=\"cursor: pointer;\"><i class='material-icons'>delete</i></a>
	 </td>";
	echo "</tr>";

endwhile; 
?>


