<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'carrapicho');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

// Caso precise testar a conexão descomentar esse codigo.
/*if($conexao == true){
	echo "Conectado ao banco de dados";
}else{
	echo "Não conectado";
}*/
?>