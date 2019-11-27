<?php

    require '../conexao.php';

    function inserirUsuario(){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];



        
        $sql = "INSER INTO `pet_shop_db`.`tb_usuario`
        (usuario, senha)
        VALUES
        (:usuario, :senha)";

        $coon = getConnection();
        $stmt = $coon->prepare($sql);
        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

        if(!$stmt->execute()){
            $msg = 1;
        }else{
            $msg = 2;
        }

        $coon = null;
        return $msg;        

    }

?>