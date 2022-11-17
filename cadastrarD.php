<?php

include "conexao.php";

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$tipoU = mysqli_real_escape_string($conexao, trim(($_POST['tipoU'])));

//var_dump($_POST); 
//die;

$query = "SELECT * FROM `cadb` WHERE `email` = '$email'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);


if($row <= 0){

	
	$sqlinsert = "INSERT INTO cadb( `email`, `senha`,`tipoU`) VALUES
	( '$email', '$senha','$tipoU' )";
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
if($tipoU == 'Dono'){

	header("location: entrar.php");

} 
else if ($tipoU == "Cuidador"){

	header("location: cadc.php");

} 
else if ($tipoU == "Veterinario"){

	header("location: cadv.php");
}

?>