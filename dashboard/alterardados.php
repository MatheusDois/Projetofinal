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






 /* maluco */

 * {
	box-sizing: border-box;
  line-height: 1;
  margin: 0;
  padding: 0;
}



 form {
  background: #fff;
  box-shadow: 0 0 2em .2em rgba(0,0,0,0.5);
  margin: 80px 70em 0 auto;
  padding: 1em;
  width: 50em;
}



label {
  display: block;
  margin-bottom: .5em;
  font-family:Arial, sans-serif;
    font-size:17px;
    color:#000;
    font-weight:bold;
  
}




 p {
  flex: 12.5em;
  margin: .5em;
}
 
 fieldset {
  border: 0;

  flex-wrap: wrap;
}

input {
  padding: .5em;
  width: 40%;
}

input [nome] {
  padding: .5em;
  width: 40%;
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


  

    <form action="bancodedados/update.php" method="post">
    <p>
    <fieldset>
  <label for="nome">  Aluno: </label> <input type="text" name="nome" id="nome" size="20" placeholder="Nome"value="<?= $nome?>"> 
                    <label for="telefone>">Telefone</label>
                    <input type="text" name="telefone"  placeholder="Telefone" value="<?= $telefone?>">
                  
</fieldset>
                    
                
                <p><p><p><input type="submit" style="width: 80px; height: 50px" value="Enviar" class="btn-sm btn-success ml-3">
                            <input type="reset" style="width: 80px; height: 50px" value="Limpar" class="btn-sm btn-secondary" >
           
           
           
            <fieldset>
                        Plano:<p><input type="text" value="<?=$plano?>" disabled class="rounded" style="border: none;">
                      
                            Personal:<P><input type="text" value="<?=$personal?>" disabled class="rounded" style="border: none;">

                        </fieldset>   
                      
        
    </form>
    
</div>
