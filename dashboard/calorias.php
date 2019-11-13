<style>
.container-new{
  margin: 5% 10% 0 30%;
  position: absolute;
  top:0;
}

body{
  background: #eeeeee;
}
</style>
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

<div class="container-new">

<div class="yz-widget" data-calculator-type="daily_need" data-language="pt" data-unit-system="metric" data-background-color="#EEEEEE" data-text-color="#212121" data-primary-color="#517600" data-alternate-background-color="#FFFFFF" data-alternate-text-color="#FFFFFF" data-secondary-color="#517600"><span class="yz-copyright">Powered by <a href="https://www.yazio.com/pt/calculadora-calorias-diarias">YAZIO</a></span></div>
<script src="https://widget.yazio.com/calculator.js" async></script>

</div>

<?php 
include_once 'includes/footer.inc.php';

} ?>