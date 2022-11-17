<?php
session_start();

include "conexao.php";

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


$query = "SELECT * FROM `cadb` WHERE `email` = '$email'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);


if($row > 0){

	$sqlinsert = "UPDATE `cadb` SET `senha` = '$senha'  WHERE `email` = '$email'";
	$rinsert = mysqli_query($conexao, $sqlinsert);

    header('location: entrar.php');
}else{

	echo "Não foi possivel Alterar a Senha!";
}



?>