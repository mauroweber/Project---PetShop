<?php
session_start();
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
    <link rel="icon" href="../img/dog.png">
    <link rel="stylesheet" type="text/css" href="../lib/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../_css/estiloFornecedor.css" />
    <link rel="stylesheet" type="text/css" href="../_css/index.css">
    <title>Cadastro de Fornecedor</title>
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
        <main>
            <form action="" method="POST" class="cadFornecedor">
                <div id="cabecalhoFornecedor">

                    <br>
                    <h1> Dados da Empresa</h1>


                    <div class="form-row ">
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputCodigo">Código</label>
                            <input id="inputCodigo" name="inputCodigo" placeholder="Código" class="form-control" required value="" maxlength="40">
                        </div>
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputcnpj">CNPJ</label>
                            <input id="inputcnpj" name="inputcnpj" placeholder="CNPJ" class="form-control" required value="" maxlength="40">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label class=" control-label" for="inputInscri">Inscrição
                                Estadual</label>
                            <input id="inputInscri" name="inputInscri" placeholder="Inscrição Estadual" class="form-control" required type="text" maxlength="40">
                        </div>
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputEmpre">Nome da
                                Empresa</label>
                            <input id="inputEmpre" name="inputEmpre" placeholder="Nome da Empresa" class="form-control" required type="text" maxlength="40">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" control-label" for="inputFantasia">Nome Fantasia</label>
                        <input id="inputFantasia" name="inputFantasia" placeholder="Nome Fantasia" class="form-control" required type="text" maxlength="40">
                    </div>



                </div>



                <div class="enderecoEmpresa">

                    <hr class="mb-3" />
                    <p>
                        <h1>Endereço</h1>
                    </p>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputLogradouro">Logradouro</label>
                            <input id="inputLogradouro" name="inputLogradouro" placeholder="Nome da rua" class="form-control" required type="text" maxlength="40">
                        </div>
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputNumero">Numero</label>
                            <input id="inputNumero" name="inputNumero" placeholder="Ex.: 123" class="form-control" required type="text" maxlength="40">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputComplemento">Complemento</label>
                            <input id="inputComplemento" name="inputComplemento" placeholder="Ex.: Sala 01" class="form-control" required type="text" maxlength="40">
                        </div>
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputCEP">CEP</label>
                            <input id="inputCEP" name="inputCEP" placeholder="Ex.: 00000-000" class="form-control" required type="text" maxlength="40">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputBairro">Bairro</label>
                            <input id="inputBairro" name="inputBairro" placeholder="Bairro" class="form-control" required type="text" maxlength="40">
                        </div>
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputMunicipio">Municipio</label>
                            <input id="inputMunicipio" name="inputMunicipio" placeholder="Municipio" class="form-control" required type="text" maxlength="40">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class=" control-label" for="inputTelefone">Telefone</label>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input id="inputTelefone" name="inputTelefone" placeholder="(00) 00000-0000" class="form-control" required type="text" maxlength="40">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="input-group col-md-6" for="uf">UF</label>

                            <select name="uf" id="uf">
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                </div>

                <br>

                <button class="addFornecedor">Cadastrar Fornecedor</button>


            </form>
        </main>

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

    <script type="text/javascript" src="../js/cadFornecedor.js"></script>
</body>

</html>