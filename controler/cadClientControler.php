<?php
require '../conexao.php';
require_once '../classes/Cliente.php';

if (!isset($_POST) || empty($_POST)) {
    $msg = 0;
} else {
    $msg    = 1;
    $tel1   = getNumeros($_POST['inputTel1']);
    $tel2   = getNumeros($_POST['inputTel2']);
    $cpf    = getNumeros($_POST['inputCpf']);
    $cep    = getNumeros($_POST['inputCep']);
    $num    = getNumeros($_POST['inputNum']);
    $cidade = $_POST['inputCidade'];
    $bairro = $_POST['inputBairro'];
    $dtNasc = $_POST['inputNasc'];
    $email  = $_POST['inputEmail'];
    $nome   = $_POST['inputName'];
    $rua    = $_POST['inputRua'];
    $estado = $_POST['uf'];
    $sql = "INSERT INTO `pet_shop_db`.`tb_clientes` (`nm_cliente`, `num_cpf`, `num_tel1`, `num_tel2`, `dt_nascimento`, `nm_email`, `num_cep`,`nm_rua`, `num_rua` ,`nm_bairro`, `nm_cidade`, `nm_estado`)  VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

    $coon = getConnection();
    $stmt = $coon->prepare($sql);
    $stmt->bindParam(1, $nome ,PDO::PARAM_STR);
    $stmt->bindParam(2, $cpf,PDO::PARAM_STR);
    $stmt->bindParam(3, $tel1,PDO::PARAM_STR);
    $stmt->bindParam(4, $tel2,PDO::PARAM_STR);
    $stmt->bindParam(5, $dtNasc, PDO::PARAM_STR);
    $stmt->bindParam(6, $email, PDO::PARAM_STR);
    $stmt->bindParam(7, $cep ,PDO::PARAM_STR);
    $stmt->bindParam(8, $rua,PDO::PARAM_STR);
    $stmt->bindParam(9, $num, PDO::PARAM_STR);
    $stmt->bindParam(10,$bairro, PDO::PARAM_STR);
    $stmt->bindParam(11,$cidade, PDO::PARAM_STR);
    $stmt->bindParam(12,$estado, PDO::PARAM_STR);


    $result = $stmt->execute();


    session_start();
    $_SESSION['msg'] = $msg;
    $coon = null;
    header ("Location: ../view/cadClientes.php");
};

function listarClientes(){
    $sql= "SELECT * FROM pet_shop_db.tb_clientes ";
    $coon = getConnection();

    $stmt = $coon->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $coon= null;
    if(count($result) == 0){
        return null;
    }else{
        return $result;
    }
};

function alterar(){
    $sql = "UPDATE tb_clientes 
    SET nm_cliente = :nome,
        num_cpf = :cpf,
        num_tel1 = :tel1,
        num_tel2 = :tel2,
        dt_nascimento = :dataNasc,
        nm_email = :email,
        num_cep = :cep,
        nm_rua = :rua,
        num_rua = :numero,
        nm_bairro = :bairro,
        nm_cidade = :cidade,
        nm_estado = :estado,
        WHERE id_cliente = :id";
};

function removerCliente($id){
    $sql = "DELETE FROM tb_clientes WHERE id_cliente = :id";
    $coon = getConnection();
    $stmt = $coon->prepare($sql);
    $stmt->bindParam(":id", $id);
    if($stmt->execute()){
        $msg =0;
    }else{
        $msg = 1;
    }
    echo "cheguei";
    var_dump($id);
    session_start();
    $_SESSION["msg"] = $msg;
    $coon = null;
    header("Location: ../view/listClientes.php");
};

function getNumeros($valor){
    return preg_replace("/[^0-9]/", "", $valor);
};




?>;