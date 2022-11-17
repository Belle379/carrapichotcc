<?php

include "conexao.php";

session_start();
$idD = $_SESSION['idD'];

$query = "SELECT * FROM `cadb` WHERE `idD` = '$idD'";
$result = mysqli_query($conexao, $query);
$bd_arr = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="css/navbarr.css">
    <title>Perfil</title>
</head>

<body>
<nav class="menu">
        <ul >
            
        <div class="ps">
             <li><a id="perfil" href='listaC.php'><img src="img/devolta.png"></a></li> 
             <li> <a id="sair" href='logout.php'>  <img src="img/saida.png"> </a> </li></div>        
      </ul>
      </nav> 
    <div class="container">
    
    <div class="img-perfil">
            <img src="svgs/cat-and-dog-animate.svg" alt="">
        </div>
        <div class="titulo">

        <div class="nome">
                <label for="nome">Perfil</label>
            </div>

<!------------------------------------DONO------------------------------------>
            
            <div class="subtitulo">
 
                
            </div>
            <div class="conteudo">
                
                    <div class="labels">
                    E-mail: <?php echo $bd_arr['email'] ?><br><br>
                    </div>  
                    <div class="labels">
                    Tipo de Usuario: <?php echo $bd_arr['tipoU'] ?><br><br> 
                
                </div>
            </div>

            <div class="alterar">
           <button > <a href="cadDA.php">Alterar</a></button>
            </div>
        </div>
        
<!------------------------------------VETERINARIO------------------------------------>        
        <?php if($bd_arr['tipoU'] == "Veterinario"){ 


$query = "SELECT * FROM `cadb`,`cadv` WHERE `idD` = '$idD'";
$result = mysqli_query($conexao, $query);
$bd_arr = mysqli_fetch_array($result);
    
             
    ?>
 <div class="cadv">
            <div class="subtitulo"> 
                <h2> VETERINARIO</h2>
            </div>
            <div class="contV">
            <div class="labels">
                    Telefone: <?php echo $bd_arr['fone'] ?><br><br>
                    </div>
                <div class="labels">
                  
                 Endereço: <?php echo $bd_arr['endereco'] ?>
                 </div>  
                    <div class="labels">
                 Cidade: <?php echo $bd_arr['cidade'] ?>
                 </div>  
                    <div class="labels">
                 Estado:<?php echo $bd_arr['estado'] ?>
                 </div>  
                    <div class="labels">
                 CRMV:<?php echo $bd_arr['CRMV']  ?>
                 </div>  
                    <div class="labels">
                 Atende 24Hrs:<?php echo $bd_arr['allday'] ?>
                 <br>
                </div>

            </div>

            <div class="alterar">
            <button > <a href="cadvA.php">Alterar</a></button>
            </div>
            </div><br>
            <?php } ?>
<!------------------------------------CUIDADOR------------------------------------>
          
            <?php  if($bd_arr['tipoU'] == "Cuidador"){ 

                $query = "SELECT * FROM `cadb`,`cadc` WHERE `idD` = '$idD'";
                $result = mysqli_query($conexao, $query);
                $bd_arr = mysqli_fetch_array($result);
                    
                    ?>
        <div class="cadc">
            <div class="subtitulo">
                <h2> CUIDADOR </h2>
                                    
            </div>

            <div class="contc">
            <div class="labels">
                    Telefone: <?php echo $bd_arr['fone'] ?><br><br>

                    </div>
                <div class="labels">
                <br>
                 Endereço: <?php echo $bd_arr['endereco'] ?><br>  
            </div>

            <div class="labels">
                 Cidade: <?php echo $bd_arr['cidade'] ?><br>
                 </div>

<div class="labels">
                 Estado:<?php echo $bd_arr['estado'] ?> <br>
                 </div>

<div class="labels">
                 Pets: <?php echo $bd_arr['cat'] ?><br>
                       <?php echo $bd_arr['dog'] ?><br>
                       </div>

<div class="labels">
                Porte:<?php echo $bd_arr['pequeno'] ?><br>
                      <?php echo $bd_arr['medio'] ?><br>
                      <?php echo $bd_arr['grande'] ?> <br>
                      </div>

<div class="labels">
                Serviços: <?php echo $bd_arr['home'] ?><br>
                          <?php echo $bd_arr['hotel'] ?>
                          <?php echo $bd_arr['passeio'] ?>
                </div>

            </div>
           
            <div class="alterar">
            <button > <a href="cadcA.php">Alterar</a></button>
            </div>
            <?php }?>
        </div><br>


</body>

</html>