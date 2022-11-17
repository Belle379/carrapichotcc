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
if($row > 0) {

	$sqlinsert = "UPDATE `cadb` SET `nome` = '$nome', `fone` = '$fone',`CRMV` = '$CRMV',
    `cidade` = '$cidade',`endereco` = '$endereco', `estado` = '$estado',`allday` = '$allday''";
	$rinsert = mysqli_query($conexao, $sqlinsert);

    header("location: perfil.php");

}else{

    echo "Não foi possivel Alterar!";
}


?>