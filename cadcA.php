<?php

include "conexao.php";

session_start();
$idD = $_SESSION['idD'];

$query = "SELECT * FROM `cadb`,`cadc` WHERE `idD` = '$idD'";
$result = mysqli_query($conexao, $query);
$bd_arr = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadC.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <script
        type='text/javascript'>document.addEventListener('DOMContentLoaded', function () { window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000); })</script>
    <title>Cadastro Cuidador</title>
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
            <img src="svgs/bom-garoto.svg">
        </div>
        <div class="form">
            <form action="cadastrarC.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Atualize seus Dados</h1>
                    </div>
                    
                </div>
                <div class="input-group">

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" id="nome" value= <?php echo $bd_arr['nome'] ?> required>
                    </div>

                    <div class="input-box">
                        <label for="tel">Telefone</label>
                        <input type="tel" name="fone" id="fone" value= <?php echo $bd_arr['fone'] ?> required>
                    </div>

                    <div class="input-box">
                        <label for="city">Cidade</label>
                        <input type="text" name="cidade" id="cidade" value=<?php echo $bd_arr['cidade'] ?> required>
                    </div>

                    <div class="input-box">
                        <label for="endereco">Endere??o</label>
                        <input type="text" name="endereco" id="endereco"  value=<?php echo $bd_arr['endereco'] ?>required>
                    </div>
                    <div class="input-box">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado">
                            <option value="estado"><?php echo $bd_arr['estado'] ?></option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amap??</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Cear??</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Esp??rito Santo</option>
                            <option value="GO">Goi??s</option>
                            <option value="MA">Maranh??o</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Par??</option>
                            <option value="PB">Para??ba</option>
                            <option value="PR">Paran??</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piau??</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rond??nia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">S??o Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="check">
                        <div class="divisao">
                        <div class="usertipe-inputs">
                            <div class="usertipe-title">
                                <h6>Cuidar?? de: </h6>
                            </div>
                            <div class="usertipe-group">
                                <div class="usertipe-input">
                                    <input type="checkbox" name="dog" value="Cachorro">
                                    <label for="cachorro">Cachorro</label>
                                </div>

                                <div class="usertipe-input">
                                    <input type="checkbox" name="cat" value="Gato" >
                                    <label for="gatos">Gatos</label>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="divisao">
                        <div class="usertipe-inputs">
                            <div class="usertipe-title">
                                <h6>Porte: </h6>
                            </div>
                            <div class="usertipe-group">
                                <div class="usertipe-input">
                                    <input type="checkbox" name="pequeno"  value="Pequeno">
                                    <label for="cachorro">Pequeno</label>
                                </div>

                                <div class="usertipe-input">
                                    <input type="checkbox" name="medio"  value="Medio">
                                    <label for="gatos">M??dio</label>
                                </div>

                                <div class="usertipe-input">
                                    <input type="checkbox" name="grande"  value="Grande">
                                    <label for="grande">Grande</label>
                                </div>
                                
                            </div>
            
                          
                        </div>
                    </div>
                        <div class="usertipe-inputs">
                            <div class="usertipe-title">
                                <h6>Servi??os: </h6>
                            </div>
                            <div class="usertipe-group">
                                <div class="usertipe-input">
                                    <input type="checkbox" name="home" value="HomeCare">
                                    <label for="homecare">Home Care</label>
                                </div>

                                <div class="usertipe-input">
                                    <input type="checkbox" name="hotel" value="Hotelzinho">
                                    <label for="hotel">Hotel</label>
                                </div>

                                <div class="usertipe-input">
                                    <input type="checkbox" name="passeio" value="Passeia">
                                    <label for="passeio">Passeio</label>

                                </div>
                            </div>
                            
                        </div>
                        
            </form>
            
        </div>
        <div class="continue-button">
            <button type="submit">Continuar</button>
        </div>
    </div>
    
</body>

</html>