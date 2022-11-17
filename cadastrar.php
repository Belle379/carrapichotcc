<?php

include "conexao.php";

$nome  = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$fone  = mysqli_real_escape_string($conexao, trim($_POST['fone']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$tipoU = mysqli_real_escape_string($conexao, trim(($_POST['tipoU'])));

//var_dump($_POST); 
//die;

$query = "SELECT * FROM `cadb` WHERE `email` = '$email'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);


if($row <= 0){

	
	$sqlinsert = "INSERT INTO cadb(`nome`,  `email`, `fone`,`senha`,`tipoU`) VALUES
	('$nome', '$email','$fone', '$senha','$tipoU' )";
	
	$rinsert = mysqli_query($conexao, $sqlinsert);
	
if($rinsert == true){

	session_start();

	$_SESSION['cadastro'] = true;
	$_SESSION['email'] = $email;
	$_SESSION['logado'] = false;
 

}else{

	echo "Não foi possivel cadastrar !";
}
}else{

echo "Email já cadastrado em nossa base de dados";
}
if ($_POST['tipoU'] =`Dono`) {

	header('location: entrar.php');
	}else  {
		header('location: conexC.php');
	} if ($_POST['tipoU'] =`Veterinario`) {
		header('location:cadV.php');
	}





?>