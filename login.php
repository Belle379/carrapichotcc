<?php
session_start();

include "conexao.php";


$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


$query = "SELECT * FROM `cadB` WHERE email =  '$email'";


$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row > 0){
	
	$bd_arr = mysqli_fetch_array($result);
	
	mysqli_close($conexao);
	
	if($bd_arr['senha'] == $senha){	
		header("Location: listaC.php");
		
		
		$_SESSION['nome'] = $bd_arr['nome'];
		$_SESSION['logado'] = true;
		$_SESSION['idD'] = $bd_arr['idD']; 
	
		//var_dump($row);
		//die;		
	
	}else{
		echo "Por favor verificar senha !";
	}

}else{
	echo "Não foi encontrado nenhum cadastro para esse E-mail!";
}

?>