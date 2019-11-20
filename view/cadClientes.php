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
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap.css" />
	<!-- link rel="stylesheet" type="text/css" href="../_css/estiloCliente.css" <-- / -->
	<link rel="stylesheet" type="text/css" href="../_css/index.css" />
	<link rel="icon" href="../img/dog.png">
	<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<title>cadastrar</title>
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
            <?php
            if (isset($_SESSION['msg'])) {
                    $msg = $_SESSION['msg'];
                    if ($msg == 0) {
                            echo "<script language='javascript' type='text/javascript'>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Cep Invalido',
                    });
                </script>";
                    } elseif ($msg == 1) {
                            echo "<script language='javascript' type='text/javascript'>
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Casdtro Salvo com Sucesso',
                        showConfirmButton: false, 
                        timer: 2000 });
                </script>";
                    };
                    unset($_SESSION['msg']);
            };

            ?>
            <br>

            <form id="formInput" method="" action="">
                    <div class="panel-heading">
                            <h5>Cadastro Cliente</h5>
                    </div>
                    <div class="panel-body">

                            <div class="form-group">
                                    <div class="col-md-11 control-label">
                                            <p class="help-block">
                                                    * Campo Obrigatório
                                            </p>
                                    </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                    <label class="control-label" for="inputName">Nome*</label>
                                    <input id="inputName" name="inputName" placeholder="Nome Completo" class="form-control" required type="text" maxlength="40">
                            </div>

                            <!-- Text input-->
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="inputCpf">CPF*</label>
                                            <input id="inputCpf" name="inputCpf" placeholder="Apenas números" class="form-control" required type="text" maxlength="11" pattern="/\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$/">
                                    </div>

                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="inputNasc">Nascimento*</label>
                                            <input id="inputNasc" name="inputNasc" placeholder="DD/MM/AAAA" class="form-control" required type="date" maxlength="10">
                                    </div>

                            </div>
                            <br>
                            <!-- Prepended text-->
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="inputTel1">Telefone</label>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input id="inputTel1" name="inputTel1" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="15" checked />
                                    </div>

                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="inputTel2">Telefone *</label>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input id="inputTel2" name="inputTel2" class="form-control" placeholder="XX XXXXX-XXXX" required type="text" maxlength="15">
                                    </div>
                            </div>


                            <!-- Prepended text-->
                            <div class="form-group">
                                    <label class="control-label" for="inputEmail">Email *</label>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="inputEmail" name="inputEmail" class="form-control" placeholder="email@email.com" required type="email">
                            </div>


                            <!-- Search input-->
                            <div class="form-group">
                                    <label class="control-label" for="inputCep">CEP *</label>
                                    <input id="inputCep" name="inputCep" placeholder="Apenas números" class="form-control input-md" required value="" type="text" maxlength="10">
                            </div>

                            <div class="form-group">
                                    <div class="control-label">
                                            <label class="control-label" for="inputRua">Rua *</label>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input id="inputRua" name="inputRua" class="form-control" placeholder="" required type="text">
                                    </div>
                            </div>

                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="inputCidade">Nº *</label>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input id="inputNum" name="inputNum" class="form-control" maxlength="10" placeholders required type="text">
                                    </div>

                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="inputCidade">Bairro</label>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input id="inputBairro" name="inputBairro" class="form-control" placeholder="" required type="text">
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="inputCidade">Cidade</label>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input id="inputCidade" name="inputCidade" class="form-control" placeholder="" required type="text">
                                    </div>

                                    <div class="form-group col-md-6">
                                            <label class="control-label" for="inputEstado">Estado</label>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <span class="input-group"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <select id="inputEstado" name="uf" id="uf" required>
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

                            <div class="form-group">
                                    <label class="col-md-2 control-label" for="Cadastrar"></label>
                                    <div class="col-md-8">
                                            <button id="btnCadastrar" name="btnCadastrar" class="btn btn-success" type="submit" placeholder="Cadastrar">Cadastrar</button>
                                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset" placeholder="Cancelar">Cancelar</button>;
                                    </div>
                            </div>
                    </div>
            </form>



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
    <script src="../js/cadCliente.js" type="text/javascript"></script>
</body>

</html>