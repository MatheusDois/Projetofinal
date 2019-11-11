
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./../css/perfil.css">

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
    <nav class="sidenav">
    <ul class="main-buttons">
      <li>
        <i class="fa fa-circle fa-2x"></i>
        Perfil
        <ul class="hidden">
          <li><a href="./mudarsenhaperfil.php">Alterar senha</a></li>
          <li><a href="./alterardados.php">Alterar Dados</a></li>
          <li><a href="./perfil.php">Perfil</a></li>
          <li><a href="./logout.php">Sair</a></li>
          
        </ul>
      </li>
      <li>
        <i class="fa fa-circle fa-2x"></i>
        Vídeo Aulas
        <ul class="hidden">
          <li><a href="./musculacao.php">Musculação</a></li>
          <li><a href="./crossfit.php">Crossfit</a></li>
          <li><a href="./pilates.php">Pilates</a></li>
          <li><a href="./jump.php">Jump</a></li>
          <li><a href="./spinning.php">Spinning</a></li>
          
        </ul>
      </li>
      <li>
        <i class="fa fa-circle fa-2x"></i>
        Cálculo IMC
        <ul class="hidden">
          <li><a href="./imc.php">Calcular</a></li>
        
          
        </ul>
      </li>

      <li>
        <i class="fa fa-circle fa-2x"></i>
        LOCALIZAÇÃO
        <ul class="hidden">
          <li><a href="./mapa.php">Acessar mapa</a></li>
     
        </ul>
      </li>
    </ul>
</nav>



<div class="container-new">

  <div class="yz-widget" data-calculator-type="bmi" data-language="pt" data-unit-system="metric" data-background-color="#EEEEEE" data-text-color="#212121" data-primary-color="#03A9F4" data-alternate-background-color="#FFFFFF" data-alternate-text-color="#FFFFFF" data-secondary-color="#FFC107"><span class="yz-copyright">Powered by <a href="https://www.yazio.com/pt/calculadora-imc">YAZIO</a></span></div>
  <script src="https://widget.yazio.com/calculator.js"></script>

</div>
<div class="calculator-line-graph-wrapper">
<span class="icon icon-yz_20-002-left-open calculator-line-graph-scroll-left-button hidden-lg" id="calculator-line-graph-scroll-left-button"></span>
<div class="calculator-line-graph" id="calculator-line-graph">
<div class="calculator-line-graph-section underweight">
<span class="calculator-line-graph-section-title">Abaixo do peso</span>
<span class="calculator-line-graph-weight-range">0,0 - <span id="bmi-underweight-max">18,4</span></span>
<div class="calculator-line-graph-ideal-weight-indicator underweight">
<span id="bmi-number-max-underweight">54,0</span> <span class="bmi-number-weight-unit">kg</span>
</div>



    <?php 
include_once 'includes/footer.inc.php';

} ?>
    