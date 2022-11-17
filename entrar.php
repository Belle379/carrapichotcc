
<?php 
session_start();
include('conexao.php');

$email = isset($_SESSION['email']);
$email = "";
?>
<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <script
        type='text/javascript'>document.addEventListener('DOMContentLoaded', function () { window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000); })</script>
    <title>Log In</title>
</head>

<body>
<nav class="menu">
<ul>
                <div class="ps">
            <li> <a id="perfil" href='cadD.php'><img src="img/cads.png"></a> </li>
            <li> <a id="sair" href='index.php'>  <img src="img/devolta.png"> </a> </li></div>
           
        </ul>
      </nav>

    <div class="container">
        <div class="form-image">
            <img src="svgs/cat-astronaut-animate.svg">
        </div>

        <div class="form">
            <form action="login.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Log in</h1>
                    </div>
            
                </div>
                <div class="input-group">

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $email ?>" placeholder="Digite seu email" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>

                    <div class="recuperar">
                        <a href="resetsenha.php">Esqueci minha senha</a>
                    </div>
               
                <div class="continue-button">
                    <button>Acessar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>