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
<img src="./imagens/adidas.png"></img><br> 
<a href="https://play.google.com/store/apps/details?id=com.runtastic.android&hl=pt_BR"><img src="./imagens/baixar1.png"></img></a>  <a href="https://apps.apple.com/br/app/adidas-running-by-runtastic/id336599882"><img src="./imagens/baixar2.png"></img></a> 
<br>
<br>
<br>
<br>
<img src="./imagens/googlefit.png"></img><br>
<a href="https://play.google.com/store/apps/details?id=com.google.android.apps.fitness&hl=pt_BR"><img src="./imagens/baixar1.png"></img></a>  <a href="https://apps.apple.com/us/app/google-fit-activity-tracker/id1433864494"><img src="./imagens/baixar2.png"></img></a> 

<br>
<br>
<br>
<br>
<img src="./imagens/nike.png"></img><br>
<a href="https://play.google.com/store/apps/details?id=com.nike.ntc&hl=pt_BR"><img src="./imagens/baixar1.png"></img></a>  <a href="https://apps.apple.com/br/app/nike-training-club/id301521403"><img src="./imagens/baixar2.png"></img></a> 

<br>
<br>
<br>
<br>
<img src="./imagens/btfit.png"></img><br>
<a href="https://play.google.com/store/apps/details?id=com.btfit&hl=pt_BR"><img src="./imagens/baixar1.png"></img></a>  <a href="https://apps.apple.com/br/app/btfit-personal-trainer/id1034954940"><img src="./imagens/baixar2.png"></img></a> 
</div>
<br>



<?php 
include_once 'includes/footer.inc.php';
} ?>