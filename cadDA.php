<?php

include "conexao.php";

session_start();
$idD = $_SESSION['idD'];

$query = "SELECT * FROM `cadb` WHERE `idD` = '$idD'";
$result = mysqli_query($conexao, $query);
$bd_arr = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadD.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <script
        type='text/javascript'>document.addEventListener('DOMContentLoaded', function () { window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000); })</script>
    <title>Cadastro</title>
</head>

<body>
<nav class="menu">
<ul>
                <div class="ps">
            <li> <a id="perfil" href='perfil.php'><img src="img/perfil.png"></a> </li>
           
           
</ul>
      </nav> 
    <div class="container">
        <div class="form-image">
            <img src="svgs/good-doggy-animate.svg">
        </div>
        <div class="form">
            <form method="POST" action="cadastrarD.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
    
                </div>
                
                <div class="input-group">


                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"  value= <?php echo $bd_arr['email'] ?> required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Nova Senha(opcional)" required>
                    </div>

                    <div class="input-box">
                    <label for="tipoU">Tipo de Usu??rio</label>
                    <select id="tipoU" name="tipoU"> 
                        <option value= <?php echo $bd_arr['tipoU'] ?>></option>
                    <option value="Dono">Dono</option>
                    <option value="Cuidador">Cuidador</option>
                    <option value="Veterinario">Veterin??rio</option>
                    </select> 
                </div>
                
                </div>
               
                <div class="continue-button">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>