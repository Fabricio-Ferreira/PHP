<?php

include_once("conexao.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

    $sql = "INSERT INTO usuarios (nome,email,profissao) 
                    VALUES ('$nome','$email','$profissao')";
            
        $query = mysqli_query($conexao,$sql);

        $linhas = mysqli_affected_rows($conexao);

    mysqli_close($conexao);
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
                <h1>Confirmação de Cadastro</h1>
                <hr><br><br>

                <?php

                    if ($linhas == 1) {
                        print "Cadastro realizado com sucesso ...";
                    }else {
                        print "Cadastro NÃO realizado!<br>
                                Já existe um usuário com este e-mail...";
                    }
                    
                ?>
 
                </form>
            </section>
        </div>
    </body>
    </html>