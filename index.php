<?php 
    session_start();

    if(isset($_SESSION['user_name'])){
        header("Location: view/home.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Shop</title>
    <link rel="icon" href="img/dog.png">
    <link rel="stylesheet " type="text/css " href="lib/bootstrap.css" />
    <link rel="stylesheet " type="text/css " href="lib/bootstrap.min.css" />
    <link rel="stylesheet " type="text/css " href="lib/bootstrap-grid.min.css" />
    <link rel="stylesheet " type="text/css " href="_css/index.css" />
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <div class="container">

        <header id="cabecalho">
            <img class="d-block mx-auto mb-2 " src="img/dog.png">
            <h1>Pet Shop</h1>
            <h5>Seu Pet Shop Favorito</h5>
        </header>
        <hr class="mb-auto" />

        <div class="d-flex justify-content-center h-75">
            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="controler/login.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Usuário" id="usuario" name="usuario"> 

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" maxlength="10">
                        </div>
                        <!-- <div class="row align-items-center remember">
                            <input type="checkbox">Lembre Me
                        </div> -->
                        <div class="form-group">
                            <input type="submit" onclick="Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
          })" name="btnLogar" id= "btnLogar" value="Entrar" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Você não tem uma Conta ?<a href="#">Cadastre aqui </a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" style="text-align: right">Esqueceu a senha?</a>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <div class="align-content-xl-center">
        <hr class="mb-5 " />
        <footer id="rodape ">
            <p class="mt-5 mb-3 text-muted text-center ">Copyright &copy; 2019 - by David Linhares / Mauro Weber / Whellington<br />
                <a href="http://google.com " target="_blank ">Facebook</a>
                <a href="http://google.com " target="_blank ">Twitter</a>
            </p>
        </footer>

    </div>
    <?php

    ?>
</body>

</html>