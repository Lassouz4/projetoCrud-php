<?php 
if (isset($_POST)){

	$nome=$_POST['nome'];
	
	//$nome=$_POST['nome'];
	$qtdacompanhante=$_POST['acompanhantes'];

	
	include('Conexao.php');

	$result=Conexao::inserir('convidados',"nome,qtdacompanhante",[$nome,$qtdacompanhante]);

	echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';


}
?> 