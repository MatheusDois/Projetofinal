  <script type="text/javascript" src="materialize/jquery-3.4.1.min.js"> </script>

<script type="text/javascript" src="materialize/materialize.min.js"> </script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style type="text/css">
a { color: inherit; } 

@import url(https://fonts.googleapis.com/css?family=Open+Sans:600);
.sidenav {
  position: fixed;
  width: 280px;
  height: 100%;
  background-color: #1E2027;
}
.sidenav .main-buttons {
  list-style-type: none;
  margin: 64px 0;
  padding: 0;
  color: #fff;
}
.sidenav .main-buttons li {
  text-transform: uppercase;
  letter-spacing: 2px;
  font-family: 'Open Sans', sans-serif;
  font-size: 15px;
  font-weight: 600;
}
.sidenav .main-buttons > li {
  padding: 16px 52px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.sidenav .main-buttons > li .fa {
  position: absolute;
  left: 12px;
  color: #414655;
}
.sidenav .main-buttons > li:hover, .sidenav .main-buttons > li:active, .sidenav .main-buttons > li:focus {
  background-color: #292c35;
  cursor: pointer;
}
.sidenav .main-buttons > li:hover .hidden, .sidenav .main-buttons > li:active .hidden, .sidenav .main-buttons > li:focus .hidden {
  width: 228px;
}

.hidden {
  width: 0;
  height: 100%;
  padding: 64px 0;
  position: absolute;
  top: 0;
  right: 0;
  overflow: hidden;
  list-style-type: none;
  background-color: #292c35;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}
.hidden li {
  padding: 16px 24px;
}
.hidden li:hover, .hidden li:active, .hidden li:focus {
  background-color: #323541;
}

body {
  background-color: #0;
  line-height: 30px;
}

html, body {
  width: 100%;
  height: 100%;
  background-image: url(https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    

  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}


.divider{
  width: 228px;
  height: 100%;
  display: block
}

.row .col{
  margin-top: 10%;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content:center;
  align-items: center;
}

#nome{
  border: none;
  border-bottom: 1px solid rgba(0,0,0,0.7);
  background: transparent;
  font-weight: 900;
  font-size: 15px;
}

.formulario{
  background: rgba(255, 255, 255, .9);
  border-radius: 10px;
  padding: 30px 150px;
}

span{
  font-weight: 900;
  font-size: 15px;
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
	endwhile;
	?>

  


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
<div class="row">
  <div class="col-2 ml-5 divider"></div>
  <div class="col ml-2  mr-3 " style="height: 100%;">


      <form action="changepw.php" method="post" class=" s12" >
        <fieldset class="formulario text-center">
          
          
          <img src="imagens/avatar-2.png" alt="(imagem)" width="100" style="margin-left: -90px; ">Alterar senha<p>
          <div style="margin-top: 30px;"></div>
          <!-- campo nome -->
            <span >Insira a senha que deseja:</span> <br>
            <input type="password" name="password"  id="nome" maxlength="40" class="w-100 mt-3" placeholder="Senha pretendida" required><p>


            <input type="submit" value="alterar" class="btn btn-success mt-3">
            <a href="perfil.php" class="btn btn-secondary mt-3">cancelar</a>
          </fieldset>
      </form>
  </div>
</div>

		<?php 
		  include_once 'includes/footer.inc.php';

	} ?>

  