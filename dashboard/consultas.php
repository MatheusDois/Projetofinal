<?php session_start();
 include_once  'includes/header.inc.php'; 
 include_once  'includes/menu.inc.php' ;


 if ($_SESSION['tipo']!=1 and $_SESSION['tipo']!=0){
	header("Location:login.php");
}
?>

<meta charset="UTF-8">
<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>


		<table class="striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Telefone</th>
					<th>Plano</th>
					<th>Personal</th>
					<th>Logradouro</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include_once 'bancodedados/read.php';
				?>
			</tbody>
		</table>
	</div>
</div>

<button >Try it</button>


<script>
function myFunction(id) {
  var txt;
  if (confirm("Deseja Deletar o registro?")) {
    window.location.href = "./bancodedados/delete.php?id="+id
  }
}
</script>
<?php include_once  'includes/footer.inc.php' ?>