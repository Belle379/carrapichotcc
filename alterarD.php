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


if($row > 0) {

	$sqlinsert = "UPDATE `cadb` SET `email` = '$email', `senha` = '$senha',`tipoU` = '$tipoU' where `email` = '$email'";
	$rinsert = mysqli_query($conexao, $sqlinsert);

    header("location: perfil.php");

}else{

    echo "Não foi possivel Alterar!";
}


?>