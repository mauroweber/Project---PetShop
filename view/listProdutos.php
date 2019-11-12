<?php
session_start();
var_dump($_SESSION['user_name']);
if (!isset($_SESSION['user_name'])) {
    header("Location: ../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="_css/index.css" />
    <link rel="icon" href="../img/dog.png">
    <style>
        h1 {
            color: bisque;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
        }
    </style>

    <title>Lista de Fornecedores</title>
</head>

<body>
    <header id="cabecalho">
        <img class="d-block mx-auto mb-0 " src="../img/dog.png">
        <h1>Pet Shop</h1>
        <h5>Seu Pet Shop Favorito</h5>
    </header>
    <hr class="mb-4" />
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="textoNavbar ">

        <ul class="navbar-nav justify-content-center">
            <li class="nav-item ">
                <a class="nav-link" href="home.php ">
                    <h6>Home</h6>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="cadClientes.php">
                    <h6>Cadastrar Cliente</h6>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="cadFornecedor.php">
                    <h6>Cadastrar Fornecedor</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cadProduto.php">
                    <h6>Cadastrar Produto</h6>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="listClientes.php">
                    <h6>Clientes</h6>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="listFornecedor.php ">
                    <h6>Fornecedores</6>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="listProdutos.php ">
                    <h6>Produtos</6>
                </a>
            </li>

        </ul>
    </nav>

    <p>
        <h1>Lista de Fornecedores</h1>
    </p>
    <br>
    <div class="jumbotron">
        <table class="table table-striped" id="tbCadastro">
            <thead id="tbFornecedores">
                <th>
                <th>Codigo:</th>
                <th>CNPJ:</th>
                <th>Incri Estadual:</th>
                <th>Nome:</th>
                <th>Logradouro:</th>
                <th>N°:</th>
                <th>Complemento:</th>
                <th>CEP:</th>
                <th>Bairro:</th>
                <th>Municipio:</th>
                <th>Estado:</th>
                <th>Telefone:</th>

                </th>
            </thead>
            <tbody>

            </tbody>

        </table>
    </div>
    <div class="align-content-xl-center">
        <hr class="mb-5 " />
        <footer id="rodape ">
            <p class="mt-5 mb-3 text-muted text-center ">Copyright &copy; 2019 - by David Linhares / Mauro Weber / Whellington <br />
                <a href="http://google.com " target="_blank "><img src="../img/facebook.png" class="navbar-toggler-icon"> Facebook</a>
                <a href="http://google.com " target="_blank "><img src="../img/instragram.png" class="navbar-toggler-icon"> Instagram</a>
            </p>
        </footer>
    </div>

    <script src="js/indexJs.js" type="text/javascript"></script>
</body>

</html>