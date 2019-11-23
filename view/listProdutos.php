<?php
session_start();
if (!isset($_SESSION['user_name'])) {
    header("Location: ../index.php");
    exit;
}

require '../controler/produtoDAO.php';


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../_css/index.css" />
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="icon" href="../img/dog.png">

    <title>Lista de Fornecedores</title>
</head>

<body>

    <div class="container">
        <header id="cabecalho">
            <div class="navbar navbar-light">
                <a class="navbar-brand"></a>
                <div class="form-inline">
                    <a class="btn btn-outline-light my-2 " href="../controler/logout.php">sair</a>
                </div>
            </div>
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
                        <h6>Fornecedores</h6>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="listProdutos.php ">
                        <h6>Produtos</h6>
                    </a>
                </li>

            </ul>
        </nav>
        <br>
        <p>
            <h3>Lista de Produtos</h3>
        </p>
        <div class="jumbotron">
            <div class="table-responsive">
                <table class="table table-striped" id="tbCadastro">
                    <thead id="tbProduto">
                        <tr>
                            <th></th>
                            <th>Nome Produto:</th>
                            <th>Descrição:</th>
                            <th>Preço Estadual:</th>
                            <th>Fornecedor:</th>
                            <th>Cnpj Fornecedor:</th>
                            <th>Telefone Contato</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = listarRelatorioProduto();
                        if (!empty($result)) {
                            foreach ($result as $produto) {
                                $idProduto = $produto['idProduto'];
                                echo "<tr>";
                                echo "<td><a href='../controler/produtoDAO.php?idProduto=" . $produto['idProduto'] . "' class='btn btn-danger'><b>0</b></a>" .
                                    "<a id='Cancelar' name='Cancelar' class='btn btn-success' ><b>x</b></a></td>";
                                echo "<td>" . $produto['nm_produto'] . "</td>";
                                echo "<td>" . $produto['descricao'] . "</td>";
                                echo "<td>" . $produto['vl_venda'] . "</td>";
                                echo "<td>" . $produto['nm_empresa'] . "</td>";
                                echo "<td>" . $produto['cnpj'] . "</td>";
                                echo "<td>" . $produto['num_telefone'] . "</td>";
                                echo "<td>" . $produto['idProduto'] . "</td>";
                                echo "</tr>";
                            };
                        };

                        if (isset($_SESSION['msg'])) {
                            $msg = $_SESSION['msg'];
                            if ($msg == 0) {
                                echo "<script language='javascript' type='text/javascript'>
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: ' Oops...',
                            text: 'Erro - 1 : Error ao Deletar do Banco! ',
                            showConfirmButton: false, 
                            timer: 2000 
                        });
                        </script>";
                            } elseif ($msg == 1) {
                                echo "<script language='javascript' type='text/javascript'>
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Removido com Sucesso!',
                            showConfirmButton: false, 
                            timer: 2000 });
                        </script>";
                            };
                            unset($_SESSION['msg']);
                        }

                        ?>
                    </tbody>
                </table>
            </div>
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
    </div>
    <script src="js/indexJs.js" type="text/javascript"></script>
</body>

</html>