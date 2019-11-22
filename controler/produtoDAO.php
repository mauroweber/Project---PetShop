<?php 
    require "../conexao.php";


    /*(A VARIAVEL _POST NÃO EXISTE) OU  ( ELA ESTA VAZIA)*/
    //INSERT PRODUTO
    if (isset($_POST['cadastrarProduto']) || !empty($_POST))  {
        session_start();
        $msg = insertProduto();
        $_SESSION['msg'] = $msg;
        header("Location: ../view/cadProduto.php");
    }

    /*A VARIAVEL $_GET  'idPRODUTO' EXISTE?*/
    //UPDATE PRODUTO
    if (isset($_GET['idProduto'])){
        $idProduto = $_GET['idProduto'];
        $msg = deletarProduto($idProduto);
        session_start();
        $_SESSION["msg"] = $msg;
        header("Location: ../view/listProdutos.php");
    }

    function insertProduto(){
        $vl_venda           = floatval($_POST['valVenda']);
        $vl_custo           = floatval($_POST['valCusto']);
        $mg_lucro           = floatval($_POST['mgLucro']);
        $cod_produto        = intval($_POST['codigo']);
        $id_fornecedor_fk   = getNumeros($_POST['fornecedor']);
        echo("<pre>");
        var_dump($_POST);
        echo("</pre>");
        $descricao          = $_POST['descricao'];
        $nm_produto         = $_POST['nomeDoProduto'];
        $cod_barras         = $_POST['codBarras'];
        $und_medida         = $_POST['undMedida'];

        $sql = "INSERT INTO `pet_shop_db`.`tb_produto`
        (cod_produto, descricao,
        nm_produto, cod_barras,
        und_medida, vl_custo,
        mg_lucro, vl_venda,
        id_fornecedor_fk)
        VALUES
        (:cod_produto, :descricao,
        :nm_produto, :cod_barras,
        :und_medida, :vl_custo,
        :mg_lucro, :vl_venda,
        :id_fornecedor_fk)
        ";
    $coon = getConnection();
    $stmt = $coon->prepare($sql);
    $stmt->bindParam(':vl_venda', $vl_venda, PDO::PARAM_STR);
    $stmt->bindParam(':vl_custo', $vl_custo, PDO::PARAM_STR);
    $stmt->bindParam(':mg_lucro', $mg_lucro, PDO::PARAM_STR);
    $stmt->bindParam(':cod_produto', $cod_produto, PDO::PARAM_STR);
    $stmt->bindParam(':id_fornecedor_fk', intval($id_fornecedor_fk), PDO::PARAM_STR);
    $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
    $stmt->bindParam(':nm_produto', $nm_produto, PDO::PARAM_STR);
    $stmt->bindParam(':cod_barras', $cod_barras, PDO::PARAM_STR);
    $stmt->bindParam(':und_medida', $und_medida, PDO::PARAM_STR);

        if(!$stmt->execute()){
            $msg = 1;
        }else{
            $msg = 2;
        }

        $coon = null;
        return $msg;   
    }

    function getNumeros($valor){
        return preg_replace("/[^0-9]/", "", $valor);
    };

    function listarRelatorioProduto(){
        $sql= "SELECT p.idProduto, p.nm_produto, p.descricao, p.vl_venda , f.nm_empresa, f.cnpj , f.num_telefone FROM
        tb_produto AS p INNER JOIN tb_fornecedor AS f ON id_fornecedor_fk = id_fornecedor;";
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

    function updateProduto(){
        $vl_venda           = floatval($_POST['valVenda']);
        $vl_custo           = floatval($_POST['valCusto']);
        $mg_lucro           = floatval($_POST['mgLucro']);
        $cod_produto        = intval($_POST['codigo']);
        $id_fornecedor_fk   = intval($_POST['idFornecedor']);
        $descricao          = $_POST['descricao'];
        $nm_produto         = $_POST['nomeDoProduto'];
        $cod_barras         = $_POST['codBarras'];
        $und_medida         = $_POST['undMedida'];

        $sql = "UPDATE `pet_shop_db`.`tb_produto`
        SET
        `cod_produto`       = :cod_produto,
        `descricao`         = :descricao,
        `nm_produto`        = :nm_produto,
        `cod_barras`        = :cod_barras,
        `und_medida`        = :und_medida,
        `vl_custo`          = :vl_custo,
        `mg_lucro`          = :mg_lucro,
        `vl_venda`          = :vl_venda,
        `id_fornecedor_fk`  = :id_fornecedor_fk,
        WHERE `id_produto` = :idProduto";

        $coon = getConnection();
        $stmt = $coon->prepare($sql);
        $stmt->bindParam(':vl_venda', $vl_venda, PDO::PARAM_STR);
        $stmt->bindParam(':vl_custo', $vl_custo, PDO::PARAM_STR);
        $stmt->bindParam(':mg_lucro', $mg_lucro, PDO::PARAM_STR);
        $stmt->bindParam(':cod_produto', $cod_produto, PDO::PARAM_STR);
        $stmt->bindParam(':id_fornecedor_fk', $id_fornecedor_fk, PDO::PARAM_STR);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        $stmt->bindParam(':nm_produto', $nm_produto, PDO::PARAM_STR);
        $stmt->bindParam(':cod_barras', $cod_barras, PDO::PARAM_STR);
        $stmt->bindParam(':und_medida', $und_medida, PDO::PARAM_STR);

    };

    function deletarProduto($idProduto){
        $coon = getConnection();
        $sql = "DELETE FROM tb_produto WHERE idProduto = :idProduto";
        $stmt = $coon->prepare($sql);
        $stmt->bindParam(":idProduto", $idProduto);
        if($stmt->execute()){
            $msg =0;
        }else{
            $msg = 1;
        }
        return $msg;
        $coon = null;
    };

?>