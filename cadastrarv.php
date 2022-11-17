<?php
include "conexao.php";

$nome      = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$fone      = mysqli_real_escape_string($conexao, trim($_POST['fone']));
$CRMV  	   = mysqli_real_escape_string($conexao, trim($_POST['CRMV']));
$cidade    = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$endereco  = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$estado    = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$allday    = mysqli_real_escape_string($conexao, trim($_POST['allday']));




//var_dump($_POST); 
//die;

if($row <= 0){

	
	$sqlinsert = "INSERT INTO cadv( `nome`, `fone`,`CRMV`,`cidade`,`endereco`, `estado` , `allday`) 
	VALUES ('$nome', $fone,'$CRMV','$cidade','$endereco','$estado' ,'$allday')";
	
	$rinsert = mysqli_query($conexao, $sqlinsert);
	

        header("location: entrar.php");

	}else{
	
		echo "Não foi possivel cadastrar !";
	}


?>