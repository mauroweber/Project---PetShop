<?php
    require "../conexao.php";
   

    /*(A VARIAVEL _POST NÃO EXISTE) OU  ( ELA ESTA VAZIA)*/
    if(isset($_POST['cadastrarFornecedor']) || !empty($_POST)) {
        $msg = insertFornecedor();
        session_start();
        $_SESSION['msg'] = $msg;
        header("Location: ../view/cadFornecedor.php");
    }

    /*A VARIAVEL $_GET  'idFornecedor' EXISTE?*/
    if (isset($_GET['idFornecedor'])){
        $idFornecedor = $_GET['idFornecedor'];
        $msg = deletarFornecedor($idFornecedor);
        session_start();
        $_SESSION["msg"] = $msg;
        header("Location: ../view/listFornecedor.php");
    }

    function insertFornecedor(){

        $numInscricao = intval($_POST['inputNumInscricao']);
        $codEmpresa   = intval($_POST['inputCodEmpresa']);
        $telefone     = intval($_POST['inputTelefone']);
        $numero       = intval($_POST['inputNumero']);
        $cep          = intval($_POST['inputCEP']);
        $nomeFantasia = $_POST['inputNmFantasia'];
        $Logradouro   = $_POST['inputLogradouro'];
        $complemento  = $_POST['inputComplemento'];
        $nomeEmpresa  = $_POST['inputNmEmpresa'];
        $municipio    = $_POST['inputMunicipio'];
        $bairro       = $_POST['inputBairro'];
        $cnpj         = $_POST['inputcnpj'];
        $selectUf     = $_POST['selectUf'];

        $sql = "INSERT INTO `pet_shop_db`.`tb_fornecedor`
        (`cod_impresa`,
        `cnpj`,`num_inscricao_estadual`,
        `nm_empresa`, `nm_fantasia`,
        `nm_rua`, `num_endereco`,
        `complemento`,`num_cep`,
        `nm_bairro`,`nm_municipio`,
        `num_telefone`,`nm_estado`)
        VALUES
        (:cod_impresa,
        :cnpj, :num_inscricao_estadual,
        :nm_empresa, :nm_fantasia,
        :nm_rua, :num_endereco,
        :complemento, :num_cep,
        :nm_bairro, :nm_municipio,
        :num_telefone, :nm_estado)";
        $coon = getConnection();
        $stmt = $coon->prepare($sql);
        $stmt->bindParam(':num_inscricao_estadual', $numInscricao, PDO::PARAM_STR);
        $stmt->bindParam(':nm_fantasia', $nomeFantasia, PDO::PARAM_STR);
        $stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
        $stmt->bindParam(':nm_municipio', $municipio, PDO::PARAM_STR);
        $stmt->bindParam(':nm_empresa', $nomeEmpresa, PDO::PARAM_STR);
        $stmt->bindParam(':cod_impresa', $codEmpresa, PDO::PARAM_STR);
        $stmt->bindParam(':num_telefone', $telefone, PDO::PARAM_STR);
        $stmt->bindParam(':num_endereco', $numero, PDO::PARAM_STR);
        $stmt->bindParam(':nm_estado', $selectUf, PDO::PARAM_STR);
        $stmt->bindParam(':nm_rua', $Logradouro, PDO::PARAM_STR);
        $stmt->bindParam(':nm_bairro', $bairro, PDO::PARAM_STR);
        $stmt->bindParam(':num_cep', $cep, PDO::PARAM_STR);
        $stmt->bindParam(':cnpj', $cnpj, PDO::PARAM_STR);
        if($stmt->execute()){
            $msg = 1;
        }else{
            $msg = 2;
        }

        $coon = null;
        return $msg;
    };

    function getNumeros($valor){
        return preg_replace("/[^0-9]/", "", $valor);
    };

    function listarFornecedor(){
        $sql= "SELECT * FROM pet_shop_db.tb_fornecedor ";
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

    function alterarFornecedor(){

        $numInscricao = intval($_POST['inputNumInscricao']);
        $codEmpresa   = intval($_POST['inputCodEmpresa']);
        $telefone     = intval($_POST['inputTelefone']);
        $numero       = intval($_POST['inputNumero']);
        $cep          = intval($_POST['inputCEP']);
        $nomeFantasia = $_POST['inputNmFantasia'];
        $Logradouro   = $_POST['inputLogradouro'];
        $complemento  = $_POST['inputComplemento'];
        $nomeEmpresa  = $_POST['inputNmEmpresa'];
        $municipio    = $_POST['inputMunicipio'];
        $bairro       = $_POST['inputBairro'];
        $cnpj         = $_POST['inputcnpj'];
        $selectUf     = $_POST['selectUf'];

    $sql = " UPDATE `pet_shop_db`.`tb_fornecedor`
        SET
        `num_inscricao_estadual` = :num_inscricao_estadual,
        `id_fornecedor` = :fornecedor,
        `nm_municipio`  = :nmmunicipio,
        `num_telefone`  = :num_telefone,
        `num_endereco`  = :num_endereco,
        `nm_fantasia`   = :nm_fantasia,
        `complemento`   = :complemento,
        `cod_impresa`   = :cod_impresa,
        `nm_empresa`    = :nm_empresa,
        `nm_estado`     = :nm_estad,
        `nm_bairro`     = :nm_bairro,
        `num_cep`       = :num_cep,
        `nm_rua`        = :nm_rua,
        `cnpj`          = :cnpj,
        WHERE `id_fornecedor` = :id_fornecedor";

        $coon = getConnection();
        $stmt = $coon->prepare($sql);
        $stmt->bindParam(':num_inscricao_estadual', $numInscricao, PDO::PARAM_STR);
        $stmt->bindParam(':nm_fantasia', $nomeFantasia, PDO::PARAM_STR);
        $stmt->bindParam(':complemento', $complemento, PDO::PARAM_STR);
        $stmt->bindParam(':nm_municipio', $municipio, PDO::PARAM_STR);
        $stmt->bindParam(':nm_empresa', $nomeEmpresa, PDO::PARAM_STR);
        $stmt->bindParam(':cod_impresa', $codEmpresa, PDO::PARAM_STR);
        $stmt->bindParam(':num_telefone', $telefone, PDO::PARAM_STR);
        $stmt->bindParam(':num_endereco', $numero, PDO::PARAM_STR);
        $stmt->bindParam(':nm_estado', $selectUf, PDO::PARAM_STR);
        $stmt->bindParam(':nm_rua', $Logradouro, PDO::PARAM_STR);
        $stmt->bindParam(':nm_bairro', $bairro, PDO::PARAM_STR);
        $stmt->bindParam(':num_cep', $cep, PDO::PARAM_STR);
        $stmt->bindParam(':cnpj', $cnpj, PDO::PARAM_STR);

        if($stmt->execute()){
            $msg = 1;
        }else{
            $msg = 2;
        }
        $coon = null;
        return $msg;
    };


    function deletarFornecedor($idFornecedor){
        $coon = getConnection();
        $sql = "DELETE FROM tb_fornecedor WHERE id_fornecedor = :idFornecedor";
        $stmt = $coon->prepare($sql);
        $stmt->bindParam(":idFornecedor", $idFornecedor);
        if($stmt->execute()){
            $msg =0;
        }else{
            $msg = 1;
        }
        return $msg;
        $coon = null;
    };

?>