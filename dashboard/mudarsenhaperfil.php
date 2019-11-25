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
  background-image: url(https://img4.goodfon.com/wallpaper/nbig/a/7c/crossfit-wheel-female-tattoos.jpg);
    

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

#mypass, #newpass{
  border: none;
  border-bottom: 1px solid rgba(0,0,0,0.7);
  background: transparent;
  font-size: 13px;
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

  


<?php include_once  'includes/menuperfil.php' ?>


<div class="row">
  <div class="col-2 ml-5 divider"></div>
  <div class="col ml-2  mr-3 " style="height: 100%;">


      <form action="changepw.php" method="post" class=" s12" >
        <fieldset class="formulario text-center">
          
          
          <center><img src="imagens/senha.jpg" alt="(imagem)" width="100" ></center>
          <p>
          <h3>Alterar senha</h3>
          <div style="margin-top: -10px;"></div>
          <!-- campo nome -->
          <b> Insira a senha que deseja: </b><br>
           <input type="password" name="password"  id="mypass" maxlength="40" class="w-100 mt-1" placeholder="Senha Pretendida" required>
          <p>

          <!-- campo nome -->
           <input type="password" name="password2"  id="newpass" maxlength="40" class="w-100 mt-1" placeholder="Confirmar Senha" required oninput="verificasenha();">
          <p>
          <p class="msg">
		 		<?php
						if (isset($_SESSION["msgPass"])) {
							echo $_SESSION["msgPass"];
							unset($_SESSION["msgPass"]);
						}
				 ?>
		  </p>

      <p id="text"></p>

            <input type="submit" value="Alterar"  id="send" class="btn btn-success mt-3 mr-5">
            <a href="perfil.php" class="btn btn-secondary mt-3">Cancelar</a>
            <p class="msg text-success">
		 		<?php
						if (isset($_SESSION["msgPass2"])) {
							echo $_SESSION["msgPass2"];
							unset($_SESSION["msgPass2"]);
						}
				 ?>
		  </p>
          </fieldset>

      </form>

  </div>
</div>
<script>
        document.getElementById('send').disabled = true;
        function verificasenha() {
            let pass = document.getElementById('mypass').value;
            let confpass = document.getElementById('newpass').value;
            let Element =document.querySelector('#text');

            if (pass !== "" && confpass !== "") {
                if (pass !== confpass) {
                    Element.innerHTML = "As senhas devem ser iguais";
                }else{
                    Element.innerHTML = ""
                    document.getElementById('send').disabled = false;
                }
            }        
        }
</script>

		<?php 
		  include_once 'includes/footer.inc.php';

	} ?>

  