<?php
include "conexao.php";

$nome      = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$fone      = mysqli_real_escape_string($conexao, trim($_POST['fone']));
$endereco  = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$cidade    = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$estado    = mysqli_real_escape_string($conexao, trim($_POST['estado']));
$dog  	   = mysqli_real_escape_string($conexao, trim($_POST['dog']));
$cat       = mysqli_real_escape_string($conexao, trim($_POST['cat']));
$pequeno   = mysqli_real_escape_string($conexao, trim($_POST['pequeno']));
$medio     = mysqli_real_escape_string($conexao, trim($_POST['medio']));
$grande	   = mysqli_real_escape_string($conexao, trim($_POST['grande']));
$home	   = mysqli_real_escape_string($conexao, trim($_POST['home']));
$hotel     = mysqli_real_escape_string($conexao, trim($_POST['hotel']));
$passeio   = mysqli_real_escape_string($conexao, trim($_POST['passeio']));



//var_dump($_POST); 
//die;

if($row <= 0){

	
	$sqlinsert = "INSERT INTO cadc( `nome`, `fone`,`endereco`, `cidade`, `estado` , `cat`,`dog`, `pequeno`,
	`medio`,`grande`, `home`,`hotel`,`passeio`) VALUES
	('$nome', $fone,'$endereco','$cidade','$estado' ,'$cat','$dog','$pequeno','$medio','$grande','$home',
	'$hotel','$passeio')";
	
	$rinsert = mysqli_query($conexao, $sqlinsert);
	

        header("location: entrar.php");

	}else{
	
		echo "Não foi possivel cadastrar !";
	}


?>