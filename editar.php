<?php
 	$codigo= $_GET['editarId'];

	include('Conexao.php');
	$linha=Conexao::selecionar("id,nome,qtdacompanhante","convidados","id","=",$codigo)->fetch();

?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width" />

		<title>Lista de Convidados</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</head>
		<body>
		
		
				<div class="panel panel-default" style="margin: 10px">
				<div class="panel-heading">
				<h1 class="panel-title">Lista de convidados</h1>
				</div>
				<div class="panel-body">
				
				
			<form class="form-inline" action="update.php" method="POST"   style="margin: 20px 0">
			<div class="form-group">
			
			<input type="text" class="form-control"
			placeholder="Nome" name="nome" value="<?php echo $linha['nome'];?>"/> 
			
			<input type="number" class="form-control"
			placeholder="Acompanhantes" value="<?php echo $linha['qtdacompanhante'];?>" name="acompanhantes"/>
			
			<input type="hidden" class="form-control"
			placeholder="Nome" name="id" value="<?php echo $linha['id'];?>"/> 
			
			<button type="submit"
			class="btn btn-primary">Adicionar</button>
			</div>	
			</form>
				</div>
				</div>
			
			
		</body>
</html>