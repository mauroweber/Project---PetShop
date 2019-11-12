<?php
    session_start();
    var_dump($_SESSION['user_name']);
    if(!isset($_SESSION['user_name'])){
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
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../_css/index.css" />
    <link rel="icon" href="../img/dog.png">

    <title>cadastrar</title>
</head>

<body>
    <header id="cabecalho">
        <img class="d-block mx-auto mb-2 " src="../img/dog.png">
        <h1>Pet Shop</h1>
        <h5>Seu Pet Shop Favorito</h5>
    </header>
    <hr class="mb-3" />
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
    <br>
    <div class="jumbotron">
        <table class="table table-striped" id="tbCadastro">
            <thead id="tbCliente">
                <th>
                    <th>Nome:</th>
                    <th>CPF:</th>
                    <th>Data Nascimento:</th>
                    <th>Telefone 1:</th>
                    <th>Telefone 2:</th>
                    <th>Email:</th>
                    <th>Cep:</th>
                    <th>Rua:</th>
                    <th>N°:</th>
                    <th>Bairro:</th>
                    <th>Cidade:</th>
                    <th>Estado:</th>

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
    <button type="submit" type="btnteste2"></button>

</body>

</html>