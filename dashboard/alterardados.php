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
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
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

input#left{
    width: 100%;
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.5);
}


label{
    display: inline-block;
    color: #0a7857;
    font-weight: 900;
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
}

/*
.box{
    box-shadow: 0 0 2px 1px rgba(0,0,0,0.5);
}
*/

 /* maluco */

 * {
	box-sizing: border-box;
  line-height: 1;
  margin: 0;
  padding: 0;
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
          <li><a href="./perfil.php">Perfil</a></li>
          
        </ul>
      </li>
      <li>
        <i class="fa fa-circle fa-2x"></i>
        Vídeo Aulas
        <ul class="hidden">
          <li>Musculação</li>
          <li>Crossfit</li>
          <li>Pilates</li>
          <li>Jump</li>
          <li>Spinning</li>
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
    <form action="./bancodedados/update.php" method="post" class="text-left">   
    <div class="row container">
            <div class="col-5 ml-4 mr-3 pt-3 pb-3 box border-right border-dark">
                <h3>Dados Pessoais:</h3>
                <div class="row ml-1 " style="margin-top: 0">
                    <label for="nome" class="mt-3"> 
                        Aluno: <br> 
                        <input type="text" name="nome" id="left" class="mt-2"  placeholder="Nome" value="<?= $nome?>">
                    </label>
                    <label for="telefone" class="ml-4 mt-3">
                        Telefone: <br> 
                        <input type="text" name="telefone" id="left" class="mt-2" placeholder="Telefone" value="<?= $telefone?>">
                    </label>
                    <label>
                        logradouro:
                        <input type="text" name="endereco" id="left" class="mt-2" value="<?= $ENDERECO ?>" style="width: 145%;">
                    </label>
                </div>
            </div>
            <div class="col box pt-3 pb-3">
                <h3>Dados Acadêmicos</h3>
                    <div class="row m-0 ">
                        <div class="col  mt-3">
                            <label>
                                Plano: 
                                <input type="text" value="<?=$plano?>" readonly="truew"  class="w-100 rounded mt-2" style="border: none;">
                            </label>
                        </div>
                        <div class="col  mt-3">
                            <label>
                                Personal: 
                                <input type="text" value="<?=$personal?>" readonly="truew"  class="w-100 rounded mt-2" style="border: none;">
                            </label>                            
                        </div>
                    </div>
                </div>
                <div class="text-right mr-5" style="margin-top: 140px">
                <input type="submit" value="Enviar" class="btn btn-success ml-3">
                <input type="reset" value="Limpar" class="btn btn-secondary" >  
        </div>  
            </div>
        </div>

    </form>
       
  


                      
        