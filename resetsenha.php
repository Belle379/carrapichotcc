<?php 
session_start();
include('conexao.php');

$email = isset($_SESSION['email']);
$email = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resetSenha.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <script
        type='text/javascript'>document.addEventListener('DOMContentLoaded', function () { window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000); })</script>
    <title>Nova Senha</title>
</head>

<body>
<nav class="menu">
<ul>
                <div class="ps">
            <li> <a id="perfil" href='cadD.php'><img src="img/cads.png"></a> </li>
            <li> <a id="sair" href='entrar.php'>  <img src="img/devolta.png"> </a> </li></div>
           
        </ul>
      </nav>
    <div class="container">
        <div class="form-image">
            <img src="svgs/reset-password-animate.svg">
        </div>
 
        <div class="form">
            <form action="recsenha.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Nova Senha</h1>
                    </div>

                </div>
                <div class="input-group">

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Confirme seu email" required>
                        
                    <div class="input-box">

                        <label for="password">Nova senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite uma nova senha" required>
                    </div>
               
                <div class="continue-button">
                    <button type="submit">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>