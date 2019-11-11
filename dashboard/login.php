<?php
session_start();
include('bancodedados/conexao2.php');
if(isset($_POST['login']))
{
	$status='1';
	$email=$_POST['username'];
	$password=($_POST['password']);
	$sql ="SELECT email,password,id,tipo FROM users WHERE email=:email and password=password(:password)";
	$query= $dbh -> prepare($sql);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':password', $password, PDO::PARAM_STR);
	$query-> execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	if($query->rowCount() > 0)
	{
		$_SESSION['alogin']=$_POST['username'];
		$_SESSION['id']=$results[0]->id;
		$_SESSION['tipo'] =$results[0]->tipo;
		header('Location: ./index.php');
	}else{
		$sql1 ="SELECT id,email,password FROM tb_clientes WHERE email=:email and password=password(:password)";
		$query1= $dbh -> prepare($sql1);
		$query1-> bindParam(':email', $email, PDO::PARAM_STR);
		$query1-> bindParam(':password', $password, PDO::PARAM_STR);
		$query1-> execute();
		$results1=$query1->fetchAll(PDO::FETCH_OBJ);
		if($query1->rowCount() > 0){
			$_SESSION['alogin']=$_POST['username'];
			$_SESSION['id']=$results1[0]->id;
			$_SESSION['tipo']=2;
			header('Location: ./perfil.php');
		}else{
			echo "<script>alert('Email ou senha incorretos!');</script>";
		}

	}
}
?>

<html lang="en" class="no-js">

<head>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">


	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
	
	body {
		background: #ffffff url(https://images.wallpaperscraft.com/image/crossfit_back_girl_120978_1920x1080.jpg) no-repeat;
		background-size: cover;
	}

	.box{
		background: rgba(0,0,0,.5);
		padding: 0;
		border-radius: 15px;
		color: #fff;
	}

	.logo{
		position: absolute;
		top: -5%;
		left: 3%;
		height: 200px;
	}
	</style>
</head>

<body>
	<a href="../index.html" class="logo"><img src="imagens/minueto.png"
alt=”sometext”  class="logo"></a>

	<div class="login-page bk-img mt-5x">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 box">
						<h1 class="text-center text-bold mt-2x">ÁREA DE LOGIN</h1>
						<div class="row pt-2x">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">
									<label for="" class="text-uppercase text-sm">Email</label>
									<input type="text" placeholder="Insira seu email" name="username" class="form-control mb" required>

									<label for="" class="text-uppercase text-sm">Senha</label>
									<input type="password" placeholder="Digite sua senha" name="password" class="form-control mb" required>
									<label for="" class="text-uppercase text-sm"><a href="mailto:contatominueto@outlook.com">Esqueceu sua senha?</label>

									<button class="btn btn-primary btn-block" name="login" type="submit" style="font-size: 13pt;">ENTRAR</button>
								</form>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
