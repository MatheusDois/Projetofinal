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
<center><h1>Dicas sobre:Pilates!</h1></center>
<center><h3>Emagrecimento e melhora de postura!<h3></center>
 <center> 
 <iframe width="500" height="360" src="https://www.youtube.com/embed/aAWYyU8povw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
 
 &nbsp;
  
  <iframe width="500" height="360" src="https://www.youtube.com/embed/hKXPbJm39Fg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 
 </center>


    <center><h3>Melhore a sua coluna com essas dicas!<h3></center>
 <center>
 <iframe width="500" height="360" src="https://www.youtube.com/embed/TF2Ky4hUJwc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
  &nbsp; 
  <iframe width="500" height="360" src="https://www.youtube.com/embed/kpCU5S65c6k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  
   </center>
   <div>
 

<?php 
include_once 'includes/footer.inc.php';

} ?>