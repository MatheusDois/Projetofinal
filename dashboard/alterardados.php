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
	endwhile;
}
?>

<style>

#content{
    background-color:  #fff;
}

.back{
    width: 100%;
    height: 200px;
    display: block;
    background-image: url(https://cdn.discordapp.com/attachments/482744051913850947/639956487032143913/PricingPagePhotos28229.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.profile-photo, img{
    width: 300px;
    position: absolute;
    top: 47px;
    left: 27%;
}

.row{
    margin-top: 130px;
}

input::placeholder{
    color:
}

.box{
    border-radius: 10px;
    padding: 30px;
    border: .5px solid #000;
    box-shadow: 1px 1px 3px #000;
    position: relative;
    top: 0;
}

.box:nth-child(2){
    padding: 10px;
}

</style>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./../css/perfil.css">

<nav class="sidenav">
    <ul class="main-buttons">
      <li>
        <i class="fa fa-circle fa-2x"></i>
        Perfil
        <ul class="hidden">
          <li><a href="./mudarsenhaperfil.php">Alterar senha</a></li>
          <li><a href="./alterardados.php">Alterar Dados</a></li>
          
        </ul>
      </li>
      <li>
        <i class="fa fa-circle fa-2x"></i>
        Dolor Sit
        <ul class="hidden">
          <li>Dark</li>
          <li>Wings</li>
          <li>Dark</li>
          <li>Words</li>
          <li>John SNUUW</li>
        </ul>
      </li>
      <li>
        <i class="fa fa-circle fa-2x"></i>
         Consectetur
         <ul class="hidden">
          <li>Lorem</li>
          <li>Ipsum</li>
          <li>Dolor</li>
        </ul>
      </li>
    </ul>
</nav>
<div class="divider"></div>
<div id="content" class="text-center">
    <div class="back"></div>
    <div class="profile-photo">
        <img src="./imagens/avatar-2.png" alt="">
    </div>

    <form action="bancodedados/update.php" method="post">
        <div class="row container-fluid ml-2">
            <div class="col-6 text-left">
                <div class="box mt-4">
                    Nome:
                    <input type="text" name="nome" class="w-100" placeholder="Nome"value="<?= $nome?>">
                    Telefone
                    <input type="text" name="telefone" class="w-100 mt-2 mb-2" placeholder="Telefone" value="<?= $telefone?>">
                    Endereço:
                    <input type="text" name="endereco" class="w-100" placeholder="Logradouro" value="<?= $ENDERECO?>">
                </div>
            </div>
            <div class="col" style="margin-top: -100px;">
                <div class="row box">
                    <div class="col text-left">
                        Plano:<p><input type="text" value="<?=$plano?>" disabled class="rounded" style="border: none;">
                        <div class="text-left mt-1">
                            <input type="submit" value="Enviar" class="btn-sm btn-success ml-3">
                            <input type="reset" value="Apagar dados" class="btn-sm btn-secondary">
                        </div>
                    </div>
                    <div class="col">
                    <div class="text-left">
                            Personal:<P><input type="text" value="<?=$personal?>" disabled class="rounded" style="border: none;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
