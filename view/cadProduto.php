<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.php")
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../img/dog.png">
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../_css/estiloProduto.css" />
    <link rel="stylesheet" type="text/css" href="../_css/index.css">
    <title>Cadastro de Produto</title>
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
    <form id="formInput">

        <br>
        <h1> CADASTRO DE PRODUTOS</h1>
        <br>

        <div class="panel-body">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="codigo">Código</label>
                    <input id="codigo" name="codigo" type="text" placeholder="Codigo" class="form-control" required value="" maxlength="40">
                </div>
                <div class="form-group col-md-6">
                    <label for="descrição">Descrição</label>
                    <input type="text" name="descrição" id="descrição" placeholder="Descrição do produto" class="form-control" required value="" maxlength="40">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nomeDoProduto">Nome do produto</label>
                    <input type="text" name="nomeDoProduto" id="nomeDoProduto" placeholder="Digitar nome do produto" class="form-control" required value="" maxlength="40">
                </div>
                <div class="form-group col-md-6">
                    <label for="codBarras">Código de Barras</label>
                    <input type="text" name="codBarras" id="codBarras" placeholder="Leitor de Código de Barras" class="form-control" required value="" maxlength="40">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="unMedida">Unidade de Media</label>
                    <input type="text" name="unMedida" id="unMedida" placeholder="Ex: m², kg, MH..." class="form-control" required value="" maxlength="40">
                </div>
                <div class="form-group col-md-6">
                    <label for="vCusto">Valor de Custo</label>
                    <input type="text" name="vCusto" id="vCusto" placeholder="Valor de custo" class="form-control" required value="" maxlength="40">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="mgLucro">Margem de Lucro</label>
                    <input type="text" name="mgLucro" id="mgLucro" placeholder="Margem em percentual" class="form-control" required value="" maxlength="40">
                </div>
                <div class="form-group col-md-6">
                    <label for="vVenda">Valor de Venda</label>
                    <input type="text" name="vVenda" id="vVenda" placeholder="Digitar valor de venda" class="form-control" required value="" maxlength="40">
                </div>
            </div>

            <p>
                <h1> INFORMAÇÕES DE ESTOQUE</h1>
            </p>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="qtdeMin">Mín. em estoque</label>
                    <input type="text" name="qtdeMin" id="qtdeMin" placeholder="Quantidade mínima em estoque" class="form-control" required value="" maxlength="40">
                </div>
                <div class="form-group col-md-6">
                    <label for="qtdeMax">Máx. em estoque</label>
                    <input type="text" name="qtdeMax" id="qtdeMax" placeholder="Quantidade máxima em estoque" class="form-control" required value="" maxlength="40">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="grupo">Grupo</label>
                    <input type="text" name="grupo" id="grupo" placeholder="Ex: Ração, medicamentos, higiene e etc.." class="form-control" required value="" maxlength="40">
                </div>
                <div class="form-group col-md-6">
                    <label for="idFabricante">Fabicante</label>
                    <input type="text" name="idFabricante" id="idFabricante" placeholder="Informar código do fornecedor" class="form-control" required value="" maxlength="40">
                </div>
            </div>
            <br>
            <button class="addProduto">Cadastrar Produto</button>

        </div>
    </form>


</body>

</html>