<?php
    include "../conexao.php";
    $id = $_GET['id'];
    $coon = getConnection();
    $sql = "DELETE FROM tb_clientes WHERE id_cliente = :id";
    $stmt = $coon->prepare($sql);
    $stmt->bindParam(":id", intval($id));
    if($stmt->execute()){
        $msg =0;
    }else{
        $msg = 1;
    }
    session_start();
    $_SESSION["msg"] = $msg;
    $coon = null;
    header("Location: ../view/listClientes.php");


?>