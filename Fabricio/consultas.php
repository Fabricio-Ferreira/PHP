<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "SELECT * FROM usuarios WHERE profissao LIKE '%$filtro%' ORDER BY nome";
$consulta = mysqli_query($conexao,$sql);
$resgistros = mysqli_num_rows($consulta);


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="_css/estilo.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>   
        </nav>
        <section>
            <h1>Consulta de Clientes</h1>
            <hr><br><br>

            <form method="get" action="">
                Filtrar por profissão: 
                            <input type="text" name="filtro" class="campo"
                                required autofocus>

                            <input type="submit" value="Pesquisar" class="btn">

            <?php
                print "<br><br>";
                print "Resultado da pesquisa com a palavra <strong>$filtro</strong>";
                print "<br><br>";
                print "$resgistros registros encontrados ...";
                print "<br><br>";
                
                while($exibirRegistros = mysqli_fetch_array($consulta)){

                    $codigo = $exibirRegistros[0];
                    $nome = $exibirRegistros[1];
                    $email = $exibirRegistros[2];
                    $profissao = $exibirRegistros[3];
                
                print "<article>";

                print "$nome<br>";
                print "$email<br>";
                print "$profissao<br>";

                print "</article>";

            }        
            
            mysqli_close($conexao);
            ?>
            </form>
        </section>
    </div>
</body>
</html>