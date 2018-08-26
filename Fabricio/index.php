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
            <h1>Cadastro de Usuários</h1>
            <hr><br><br>

            <form method="post" action="processa.php">

                Nome<br>
                <input type="text" name="nome" class="campo" 
                       maxlength="40" required autofocus><br>
                Email<br>
                <input type="email" name="email" class="campo" 
                       maxlength="50" required><br>
                Profissão<br>
                <input type="text" name="profissao" class="campo" 
                       maxlength="40" required><br><br>
                       
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                

            </form>


        </section>
    </div>
</body>
</html>