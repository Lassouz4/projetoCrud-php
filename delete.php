<?php
if (isset($_GET)) {
	
	$codigo=$_GET['excluirrId'];

	include('Conexao.php');
	
	Conexao::deletar('convidados','id','=',$codigo);

	echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
}


?>