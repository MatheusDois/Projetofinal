<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./../css/perfil.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

<style>
 h1 {
    display: inline-block;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    
 }

 .main{
	margin-left:  22%;
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


<br>
<br>
<br>
<div class="main">
<center><h1>Dicas cruciais para: Crossfit!</h1></center>
<center><h3>Quer melhorar a eficiência com exercícios básicos? Confira! <h3></center>
 <center> <iframe width="500" height="360" src="https://www.youtube.com/embed/5Dut3q8lGUQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
 &nbsp; <<iframe width="500" height="360" src="https://www.youtube.com/embed/0fZqPnUZ8M4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

    <center><h3>Dicas dadas por um campeão de Crossfit, além de dicas de alimentação!<h3></center>
 <center> <<iframe width="500" height="360" src="https://www.youtube.com/embed/pLYZCaFjIrc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
 &nbsp; <iframe width="500" height="360" src="https://www.youtube.com/embed/6ym68AwBfXU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
 </div>

<?php 
include_once 'includes/footer.inc.php';

} ?>