<?php

include "conexao.php";

session_start();
$idD = $_SESSION['idD'];

$query = "SELECT * FROM `cadb`,`cadv` WHERE `idD` = '$idD'";
$result = mysqli_query($conexao, $query);
$bd_arr = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadV.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <script
        type='text/javascript'>document.addEventListener('DOMContentLoaded', function () { window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000); })</script>
    <title>Cadastro Veterinário</title>
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
            <img src="svgs/veterinary-animate.svg">
        </div>
        <div class="form">
            <form action="cadastrarv.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Atualize seus Dados</h1>
                    </div>
                  
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" id="nome" value= <?php echo $bd_arr['nome'] ?> required>
                    </div>

                    <div class="input-box">
                        <label for="tel">Telefone</label>
                        <input type="tel" name="fone" id="fone" value= <?php echo $bd_arr['fone'] ?> required>
                    </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="name">CRMV</label>
                        <input type="number" name="CRMV" id="crmv" value=<?php echo $bd_arr['CRMV'] ?> required>
                    </div>

                    <div class="input-box">
                        <label for="city">Cidade</label>
                        <input type="text" name="cidade" id="cidade" value=<?php echo $bd_arr['cidade'] ?> required>
                    </div>
                    
                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco"  value=<?php echo $bd_arr['endereco'] ?> required >
                    </div>
                    <div class="input-box">
                    <label for="estado">Estado</label>
                    <select id="estado" name="estado"> 
                        <option value="estado"><?php echo $bd_arr['estado'] ?></option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                  
                </div>
                
                <div class="radio">
                    <label for="horario">Atende 24Hrs?</label>
                    <div class="opcoes">
                   <input id="Radio1"  type="radio" name="allday" value="SIM"/> <span>Sim</span>
                   <input id="Radio2" type="radio" name="allday"  value="NÃO"/> <span>Não</span>
                </div>

                </div>
                </div>
             
                <div class="continue-button">
                    <button type="submit">Alterar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>