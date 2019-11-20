<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: ../index.php");
    exit;
}
include '../controler/cadClientControler.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../img/dog.png">
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap.css" />
    <!--link rel="stylesheet" type="text/css" href="../_css/estiloProduto.css" /-->
    <link rel="stylesheet" type="text/css" href="../_css/index.css">
    <title>Cadastro de Produto</title>
</head>

<body>
    <div class="container">
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
        <form id="formInput">

            <div class="panel-heading">
                <h3>Cadastro Produto</h3>
            </div>

            <div class="panel-body">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="codigo">Código</label>
                        <input id="codigo" name="codigo" type="text" placeholder="Codigo" class="form-control" required value="" maxlength="11">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="descrição">Descrição</label>
                        <input type="text" name="descrição" id="descrição" placeholder="Descrição do produto" class="form-control" required value="" maxlength="150">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nomeDoProduto">Nome do produto</label>
                        <input type="text" name="nomeDoProduto" id="nomeDoProduto" placeholder="Digitar nome do produto" class="form-control" required value="" maxlength="100">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="codBarras">Código de Barras</label>
                        <input type="text" name="codBarras" id="codBarras" placeholder="Leitor de Código de Barras" class="form-control" required value="" maxlength="50">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="undMedida">Unidade de Media</label>
                        <input type="text" name="undMedida" id="undMedida" placeholder="Ex: m², kg, MH..." class="form-control" required value="" maxlength="45">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="valCusto">Valor de Custo</label>
                        <input type="text" name="valCusto" id="valCusto" placeholder="Valor de custo" class="form-control" required value="" maxlength="100">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="mgLucro">Margem de Lucro</label>
                        <input type="text" name="mgLucro" id="mgLucro" placeholder="Margem em percentual" class="form-control" required value="" maxlength="40">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="vVenda">Valor de Venda</label>
                        <input type="text" name="valVenda" id="vVenda" placeholder="Digitar valor de venda" class="form-control" required value="" maxlength="40">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fornecedor">Fornecedor</label>
                        <select id="fornecedor" class="form-control" name="fornecedor" placeholder="Fornecedor">
                            <option>Default</option>
                            <?php
                            $result = listarClientes();
                            foreach ($result as $pessoa) {
                                echo "<option id=" . $pessoa["id_cliente"] . " name =" . $pessoa["id_cliente"] . ">" . $pessoa["nm_cliente"] . "</option>";
                            };
                            ?>
                        </select>

                    </div>
                </div>

               <!-- <p>
                    <h4> INFORMAÇÕES DE ESTOQUE</h4>
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

                <div class="form-group">
                    <label class="col-md-2 control-label" for="Cadastrar"></label>
                    <div class="col-md-8">
                        <button id="btnCadastrar" name="btnCadastrar" class="btn btn-success" type="submit" placeholder="Cadastrar">Cadastrar</button>
                        <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset" placeholder="Cancelar">Cancelar</button>;
                    </div>
                </div>

                F-->

            </div>
        </form>
    </div>
</body>

</html>