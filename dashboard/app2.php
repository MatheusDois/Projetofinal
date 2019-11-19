<?php
session_start();
error_reporting(1);
include('bancodedados/conexao2.php');
include_once 'bancodedados/conexao.php';
if(!isset($_SESSION['id']) or ($_SESSION['tipo']!=2))
{	
	header('location:login.php');
}
else{
	$id = $_SESSION['id'];
	$querySelect = $link->query("select * from tb_clientes where id='$id'");
	
	
	while($registros = $querySelect->fetch_assoc()):
		$nome = $registros ['nome'];
		$email = $registros ['email'];
		$telefone = $registros ['telefone'];
		$plano = $registros ['plano'];
		$personal = $registros ['personal'];
		$ENDERECO = $registros ['ENDERECO'];
	endwhile;?>

<?php include_once  'includes/menuperfil.php' ?>

<style>

body {
	background-color: white;
}

 #centralizar { 
	 text-align: center;
	 margin-left: 21%;
	 
 }
</style>
<br>
<div id="centralizar">
<img src="./imagens/tecnonutri.png"></img><br> 
<a href="https://play.google.com/store/apps/details?id=br.com.tecnonutri.app&hl=pt_BR"><img src="./imagens/baixar1.png"></img></a>  <a href="https://apps.apple.com/br/app/tecnonutri-gestao-da-sua-dieta/id574794938"><img src="./imagens/baixar2.png"></img></a> 
</div>
<br>
<br>
<br>
<br>
<div id="centralizar">
<img src="./imagens/dieta.png"></img><br>
<a href="https://play.google.com/store/apps/details?id=com.br.nutrisoft.main"><img src="./imagens/baixar1.png"></img></a>  <a href="https://apps.apple.com/br/app/dieta-e-emagrecer/id777236941"><img src="./imagens/baixar2.png"></img></a> 
</div>
<br>
<br>
<br>
<br>
<div id="centralizar">
<img src="./imagens/receitas.png"></img><br>
<a href="https://play.google.com/store/apps/details?id=net.aspbrasil.keer.core.receitaslight&hl=pt_BR"><img src="./imagens/baixar1.png"></img></a>  <a href="https://apps.apple.com/br/app/receitas-light-dieta-e-saude/id561948185"><img src="./imagens/baixar2.png"></img></a> 
</div>
<br>
<br>
<br>
<br>
<div id="centralizar">
<img src="./imagens/comida.png"></img><br>
<a href="https://play.google.com/store/apps/details?id=com.myfitnesspal.android&hl=pt_BR"><img src="./imagens/baixar1.png"></img></a>  <a href="https://apps.apple.com/br/app/myfitnesspal/id341232718"><img src="./imagens/baixar2.png"></img></a> 
</div>
<br>



<?php 
include_once 'includes/footer.inc.php';

} ?>