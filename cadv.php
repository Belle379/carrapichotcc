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
            <li> <a id="perfil" href='entrar.php'><img src="img/login.png"></a> </li>
            <li> <a id="sair" href='index.php'>  <img src="img/devolta.png"> </a> </li></div>
           
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
                        <h1>Cadastro Veterinário</h1>
                    </div>
                  
                </div>
                <div class="input-group">

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label for="tel">Telefone</label>
                        <input type="tel" name="fone" id="fone" placeholder="(xx) xxxxx-xxxx" required>
                    </div>


                    <div class="input-box">
                        <label for="name">CRMV</label>
                        <input type="number" name="CRMV" id="crmv" placeholder="XXXX.XX.XXXXX.XXX" required>
                    </div>

                    <div class="input-box">
                        <label for="city">Cidade</label>
                        <input type="text" name="cidade" id="cidade" placeholder="Digite sua cidade" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco"  required placeholder="Insira seu endereço">
                    </div>
                    <div class="input-box">
                    <label for="estado">Estado</label>
                    <select id="estado" name="estado"> 
                        <option value="estado">Estado</option>
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
                    <button type="submit">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>