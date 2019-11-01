  <script type="text/javascript" src="materialize/jquery-3.4.1.min.js"> </script>

<script type="text/javascript" src="materialize/materialize.min.js"> </script>

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
  height: 100%;
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
          <li><a href="./perfil.php">Alterar senha</a></li>
          <li>Alterar Dados</li>
          
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

<center>
<div class="row container">
  <p>&nbsp;</p>
  <form action="changepw.php" method="post" class="col s12">
    <fieldset class="formulario" style="padding: 15px">
      <legend><img src="imagens/avatar-2.png" alt="(imagem)" width="100"></legend>
      <h5 class="light center" style="font-size: 23pt;">Alterar senha</h5>

      <!-- campo nome -->
      <div class="input-field col s12">
       
        Insira a senha que deseja:<input type="password" name="password"  id="nome" maxlength="40" placeholder="Senha pretendida" required>

      </div>

      <!-- botoes -->
      <div class="input-field col s12">
        <input type="submit" value="alterar" class="btn green">
        <a href="consultas.php" class="btn grey">cancelar</a>
      </fieldset>

    </div>

  </form></center>
		<?php 
		include_once 'includes/footer.inc.php';

	} ?>




