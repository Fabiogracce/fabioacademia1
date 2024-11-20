<?php
    namespace PHP\fabiophp\crud;
    require_once('crud\Conexao.php');
    require_once('crud\ExcluirConexao.php');
    use PHP\fabiophp\crud\Conexao;
    use PHP\fabiophp\crud\ExcluirConexao;


?>

<<!Doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>HOME</title>
    <style>
        /* CSS */
        body {
            font-family: "inter", sans-serif;
            background-image: url("imagem/smartcapa2.jpg") ;
            background-size: cover;

        }

        .navbar navbar-expand-lg bg-dark {
            background-color: black; 

        }

        .navbar-nav{
            margin-left:380px;
        }

        a{
            margin-left:10px;
        }
        .navbar .nav-link {
            color: #aaa; 
        }

        .navbar .nav-link:hover {
            color: black; 
            background-color: #ffc107; 
            border-radius: 5px; 
        }

       
        label {
            display: block;
            font-weight: bold;
            text-align: center; 
            color: white;
            margin-bottom: 5px; 
        }

       
        input[type="text"] {
            width: 300px; 
            padding: 10px;
            margin: 5px auto; 
            display: block; 
            border: 1px solid #ccc; 
            border-radius: 4px;
        }

       
        form {
            display: flex;
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            margin-top: 20px; 
        }

     
        button {
            padding: 10px 20px;
            background-color:#ffc107;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px; 
            margin-bottom: 20px; 
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
            <figure class="menuimg">
                <img src="imagem/smart-fit.jpg" width="100px" alt="Logotipo da academia">
            </figure> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link " href="Home.php">HOME</a>
            <a class="nav-link"  href="Index.php">CADASTRAR</a>
            <a class="nav-link"  href="Atualizar.php">ATUALIZAR</a>
            <a class="nav-link " href="Consultar.php">CONSULTAR</a>
            <a class="nav-link " href="Excluir.php">EXCLUIR</a>
        </div>
        </div>
    </div>
    </nav>
    <form method="POST">
    <label>CPF:</label>
    <input type="text" name="cpf" id="cpf"/><br><br>

    <button type="submit">Excluir
        <?php
            $conexao = new Conexao();
            $cpf = $_POST['cpf'];
            $excluir = new Excluir();
        ?>
        <?php
            if(isset($_POST['cpf'])){
                $conexao = new Conexao();//Conectando o banco
                $codigo = $_POST['cpf'];
                
                //Chamar a classe inserir
                $excluir= new Excluir();

            }else{
                $_POST['cpf'] = 0;
                
            }
        ?>
        </button>
        <?php
            echo $inserir -> excluirPessoa($conexao, $cpf);
        ?>
        </button>
        </form>
        <br><br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>