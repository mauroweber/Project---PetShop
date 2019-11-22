<?php

require '../conexao.php';

if (!empty($_POST) AND (empty($_POST['usuario'] OR empty($_POST['senha'])))) {
    header("Location: ../index.php");
    $msg = 0;
    exit;
} else {
    $usuario = $_POST['usuario'];
    $senha   = $_POST['senha'];
    $sql     = 'SELECT * FROM tb_usuario WHERE usuario = :usuario  AND senha = :senha';

    $coon = getConnection();
    $stmt = $coon->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);

    $result = $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    session_start();
    
    if (count($users) <= 0) {
        $msg = 1;       
    } else {
        $msg = 2;
       
        $_SESSION['logado'] = true;
        $_SESSION['user_id'] = $users[0]["idusuario"];
        $_SESSION['user_name'] = $users[0]["usuario"];      
    };
    
    $_SESSION['msg'] = $msg;
    header('Location: ../view/home.php');

    $coon = null;
}

?>