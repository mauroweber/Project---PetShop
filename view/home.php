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
  <link rel="stylesheet" type="text/css" href="../_css/estiloProduto.css" />
  <link rel="stylesheet" type="text/css" href="../_css/index.css">
  <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <title>PetShop</title>
</head>

<body>
  <div class="container">
    <header id="cabecalho">
      <img class="d-block mx-auto mb-2 " src="../img/dog.png">
      <h1>Pet Shop</h1>
      <h5>Seu Pet Shop Favorito</h5>
    </header>
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
    <hr class="mb-3" />
    <?php
    if (isset($_SESSION['msg'])) {
      $msg = $_SESSION['msg'];
      if ($msg == 0) {
        echo "<script language='javascript' type='text/javascript'>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Prenchar todos Campos!',
                            });
                        </script>";
      } elseif ($msg == 1 or $msg == 2) {
        echo "<script language='javascript' type='text/javascript'>
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'SEJA BEM VINDO',
                                showConfirmButton: false, 
                                timer: 2000 });
                        </script>";
      } else {
        echo "<script language='javascript' type='text/javascript'>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Login Invalido',
                    });
                </script>";
      };
      unset($_SESSION['msg']);
    };
    ?>

    <div class="align-content-xl-center">
      <hr class="mb-5 "/>
      <footer id="rodape ">
        <p class="mt-5 mb-3 text-muted text-center ">Copyright &copy; 2019 - by David Linhares / Mauro Weber / Whellington <br />
          <a href="http://google.com " target="_blank "><img src="../img/facebook.png" class="navbar-toggler-icon"> Facebook</a>
          <a href="http://google.com " target="_blank "><img src="../img/instragram.png" class="navbar-toggler-icon"> Instagram</a>
        </p>
      </footer>
    </div>
  </div>
</body>
</html>