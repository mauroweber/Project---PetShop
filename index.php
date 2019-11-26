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
    <link rel="Stylesheet " type="text/css " href="estiloLogin.css" />
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

</head>

<body>
<div class="form_container">
                <div class="d-flex justify-content-center h-100">
                    <div class="user_card">
                        <div class="d-flex justify-content-center">
                            <div class="brand_logo_container">
                                <img src="img/dog.png" class="brand_logo" alt="Logo">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                            <form>
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="" class="form-control input_user" value="" placeholder="Usuario">
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" name="" class="form-control input_pass" value="" placeholder="Senha">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Lembrar Senha</label>
                                    </div>
                                </div>
                                    <div class="d-flex justify-content-center mt-3 login_container">
                             <a href="index.php"> <button type="button" name="button" class="btn login_btn">Login</button></a>
                             
                           </div>
                            </form>
                        </div>
                
                        <div class="mt-4">
                            <div class="d-flex justify-content-center links" >
                                 <a href="#" class="ml-2">Cadastrar novo usuario</a>
                            </div>
                            <div class="d-flex justify-content-center links">
                                <a href="#">Esqueceu sua senha?</a>
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