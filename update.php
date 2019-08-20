<?php 
if (isset($_POST)){

	$codigo=$_POST['id'];
	
	$nome=$_POST['nome'];
	$qtdacompanhante=$_POST['acompanhantes'];
	echo $nome.' '.$qtdacompanhante;
	include('Conexao.php');
	
	Conexao::atualizar("convidados","nome",$nome,"id","=",$codigo);
	Conexao::atualizar("convidados","qtdacompanhante",$qtdacompanhante,"id","=",$codigo);
	
	echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
} 
?> 