<?php 
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Meu utilizador</h5><hr>
	</div>
</div>

<?php 
include_once 'bancodedados/conexao2.php';
?>



<div class="row container">
	<p>&nbsp;</p>
	<form action="changepw.php" method="post" class="col s12">
		<fieldset class="formulario" style="padding: 15px">
			<legend><img src="imagens/avatar-2.png" alt="(imagem)" width="100"></legend>
			<h5 class="light center" style="font-size: 23pt;">Alterar senha</h5>

			<!-- campo nome -->
			<div class="input-field col s12">
				<i class="material-icons prefix">lock</i>
				<input type="password" name="password"  id="nome" maxlength="40" placeholder="Senha pretendida" required>

			</div>

			<!-- botoes -->
			<div class="input-field col s12">
				<input type="submit" value="alterar" class="btn green">
				<a href="consultas.php" class="btn grey">cancelar</a>
			</fieldset>

		</div>

	</form>


	<?php 
	include_once 'includes/footer.inc.php';

	?>