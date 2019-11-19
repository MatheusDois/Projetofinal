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
    background-image: url(http://selfgrowth.info/photos/best-fitness-pictures-online/best-fitness-pictures-online6556.jpg);
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
    width: 98%;
    float: left;
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.5);
}

label, input{
    display: flex;
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

 .align-test{
margin-top: 7px;
 }

 .mybtn{
     position: absolute;
     top: 50%;
     left: 72%;
 }

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

<?php include_once  'includes/menuperfil.php' ?>

<div class="divider"></div>
<div id="content" class="text-center">
    <div class="back"></div>
    <div class="profile-photo">
        <img src="./imagens/avatar-2.png" alt="">
    </div>

<form action="bancodedados/update.php" method="post" class="text-left">
<div class="row container">
            <div class="col-6 ml-4 mr-3 pt-3 pb-3 box border-right border-dark">
                <h3 class="w-100">Dados Pessoais:</h3>
				<div class="row ml-1 " style="margin-top: 0">
				<label for="nome" class="mt-3"> 
                        Aluno: <br> 
                <input type="text" name="nome"  readonly="true"  value="<?php echo $nome?>" id="left" maxlength="14">
				</label>

				<label for="telefone" class="ml-4 mt-3">
                        Telefone: <br> 
					<input type="text" name="telefone"  value="<?php echo $telefone?>" id="left" maxlength="14" placeholder="Seu telefone" style="float: left;">
					</label>

					<label>
                        Logradouro:
					<input type="text" name="ENDERECO" id="left" value="<?php echo $ENDERECO?>"maxlength="50" placeholder="Seu Logradouro"  style="width: 145%;">
					</label>
				</div>
			</div>


			<div class="col box pt-3 pb-3">
                <h3>Dados Acadêmicos</h3>
                    <div class="row m-0 ">
                        <div class="col  mt-3">
                            <label>
                                Plano: 
					<input type="text" name="plano" id="plano"  readonly="true" " value="<?php echo $plano?>" maxlength="50" class=" rounded mt-2" style="border: none;width: 90.5px;">
					</label>
					</div>

					<div class="col  mt-3">
                            <label>
                                Personal: 
					<input type="text" name="personal" readonly="true" value="<?php echo $personal?>" class=" rounded mt-2" style="border: none;" maxlength="50" style="border: none;width: 90.5px;">
</label>
</div>
</div>
</div>

<div class="text-right mr-5 mybtn" style="margin-top: 140px">
					<input type="submit" value="Alterar" class="btn btn-success ml-3">
					<input type="reset" value="Cancelar" class="btn btn-secondary">
</div>
</div>
</div>				
 </form>
       
  


                      
        