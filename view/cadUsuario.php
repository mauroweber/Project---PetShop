<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Shop</title>
    <link rel="icon" href="../img/dog.png">
    <link rel="stylesheet " type="text/css " href="../lib/bootstrap.css" />
    <link rel="stylesheet " type="text/css " href="../lib/bootstrap.min.css" />
    <link rel="stylesheet " type="text/css " href="../lib/bootstrap-grid.min.css" />
    <link rel="stylesheet " type="text/css " href="../_css/index.css" />
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <div class="container">

        <header id="cabecalho">
            <img class="d-block mx-auto mb-2 " src="../img/dog.png">
            <h1>Pet Shop</h1>
            <h5>Seu Pet Shop Favorito</h5>
        </header>
        <hr class="mb-auto" />

        <div class="d-flex justify-content-center h-75">
            <div class="card">
                <div class="card-header">
                    <h3>Cadastrar Usuário</h3>
                </div>
                <div class="card-body">
                <?php
                    if(isset($_SESSION['msg'])){
                        $msg = $_SESSION['msg'];
                        if($msg == 0){                            
                            echo "<script language='javascript' type='text/javascript'>
                                Swal.fire({                                    
                                    icon: 'success',
                                    title: 'Cadastro Salvo com Sucesso',
                                    showConfirmButton: false, 
                                    timer: 2000 });
                            </script>";
                        }elseif($msg == 1){
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
                    <form method="POST" action="../controler/cadUsuarioController.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Usuário" id="usuario" name="usuario"> 
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="E-mail" id="email" name="email"> 
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha"> 
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="confirmarSenha" id="confirmarSenha" class="form-control" placeholder="Confirmar Senha" maxlength="10">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnCadUsuario" id= "btnCadUsuario" value="Cadastrar Usuário" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
            </div>
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
    <?php

    ?>
</body>

</html>