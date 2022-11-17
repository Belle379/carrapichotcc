<?php

session_start();
include('conexao.php');
?>

<html lang="pt-br">

<head>

    <title> Lista de Cuidadores</title>
    <link rel="stylesheet" href="tabela.css">
    <link rel="stylesheet" href="css/navbarr.css">
</head>

<body>
    <nav class="menu">
    
        <ul>
                <div class="ps">
            <li> <a id="perfil" href='perfil.php'><img src="img/perfil.png"></a> </li>
            <li> <a id="sair" href='logout.php'>  <img src="img/saida.png"> </a> </li></div>
           
        </ul>
    </nav>
    
    <h2 id='titl'> ENCONTRE UM CUIDADOR </h2>

    <div class="container">
        <a href="listaC.php"> <button type="submit" id="c">CUIDADORES </button></a>
        <a href="listaV.php"> <button type="submit" id="v">VETERINÁRIOS</button></a>


        <form action="">
            <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>"
                placeholder="Faça sua pesquisa: Cidade, endereço, tipo de serviço" type="text">
            <button type="submit">Buscar</button>

        </form>


        <table>

            <thead>
                <tr>
                    <th id="n">Nome</th>
                    <th id="f">Telefone</th>
                    <th id="l">Localização</th>
                    <th id="p">PETs</th>
                    <th id="p">Porte</th>
                    <th id="s">Serviços Prestado</th>
                </tr>
            </thead>

            <?php
        if (!isset($_GET['busca'])) {
            ?>
            <tr>
                <td colspan="6">Digite algo para pesquisar...</td>
            </tr>
            <?php
        } else {
            $pesquisa = $conexao->real_escape_string($_GET['busca']);
            $sql_code = "SELECT * 
                FROM cadc
                WHERE  endereco LIKE '%$pesquisa%' 
                OR cidade LIKE '%$pesquisa%'
                OR Home LIKE '%$pesquisa%'
                OR Hotel LIKE '%$pesquisa%'
                OR Passeio LIKE '%$pesquisa%'";
            $sql_query =$conexao->query($sql_code) or die("ERRO ao consultar! " . $conexao->error); 
            
            if ($sql_query->num_rows == 0) {
                ?>
            <tr>
                <td colspan="6">Nenhum resultado encontrado...</td>
            </tr>
            <?php
            } else {
                while($dados = $sql_query->fetch_assoc()) {
                    ?>
            <tr>

                <td> <?php echo $dados['nome'] ?></td>
                <td><a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5599111112222" target="_blank">
                        <?php echo $dados['fone'] ?></td>
                <td>
                    <?php echo $dados['endereco']?>
                    <?php echo $dados['cidade']?>
                    <?php echo $dados['estado']?> </td>

                <td>
                    <?php echo $dados['cat']?><br>
                    <?php echo $dados['dog']?></td>
                <td>
                    <?php echo $dados['pequeno']?>
                    <?php echo $dados['medio']?>
                    <?php echo $dados['grande']?> </td>

                <td>
                    <?php echo $dados['home']?><br>
                    <?php echo $dados['hotel']?><br>
                    <?php echo $dados['passeio']?></td>
            </tr>
            <?php
                }
            }
            ?>
            <?php
        } ?>
        </table>
    </div>

<a href="https://www.worldanimalprotection.org.br/denuncia " style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#e59314;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
<svg style="margin-top:10px" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
  <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
  <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
</svg>
</a>
<a class="suporte">
    <p> Caso precise de ajuda, contate-nos: <b>suporte@carrapicho.com</b> </p>
    </a>
</div>


</body>
        
</html>