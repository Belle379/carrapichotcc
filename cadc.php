<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadC.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', function() {
        window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000);
    })
    </script>
    <title>Cadastro Cuidador</title>
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
            <img src="svgs/bom-garoto.svg">
        </div>
        <div class="form">
            <form action="cadastrarC.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro Cuidador</h1>
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
                        <label for="city">Cidade</label>
                        <input type="text" name="cidade" id="cidade" placeholder="Digite sua cidade" required>
                    </div>

                    <div class="input-box">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" required placeholder="Insira seu endereço">
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
                    <div class="check">
                        <div class="divisao">
                            <div class="usertipe-inputs">
                                <div class="usertipe-title">
                                    <h6>Cuidará de: </h6>
                                </div>
                                <div class="usertipe-group">
                                    <div class="usertipe-input">
                                        <input type="checkbox" name="dog" value="Cachorro">
                                        <label for="cachorro">Cachorro</label>
                                    </div>

                                    <div class="usertipe-input">
                                        <input type="checkbox" name="cat" value="Gato">
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
                                        <input type="checkbox" name="pequeno" value="Pequeno">
                                        <label for="cachorro">Pequeno</label>
                                    </div>

                                    <div class="usertipe-input">
                                        <input type="checkbox" name="medio" value="Medio">
                                        <label for="gatos">Médio</label>
                                    </div>

                                    <div class="usertipe-input">
                                        <input type="checkbox" name="grande" value="Grande">
                                        <label for="grande">Grande</label>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <div class="usertipe-inputs">
                            <div class="usertipe-title">
                                <h6>Serviços: </h6>
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
            <button type="submit">CADASTRAR</button>
        </div>
    </div>

</body>

</html>