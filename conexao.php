<!-- CONEXÃO COM BANCO  -->
<!-- aletr user 'root' @'localhost' indentifiead with mwsql-nagtive - passqord by -->
<?php
    function getConnection(){ 
        $local = 'mysql:host=localhost;dbname=pet_shop_db';
        $user = "root";
        $password = "";
        try{
            $connPdo = new pdo($local, $user , $password);
            $connPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connPdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
            
        }catch(PDOException $e){
            echo"ERROR " .$e->getMessage();
            die("ERROR " .$e->getMessage());
        }
        return $connPdo;       
            
    }

    function listarTodasPessoas(){
        $conn = getConnection();

        $sql = "SELECT * FROM pessoa";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        return $result;
        $conn = null;
    }

?>

   
        <!--     
            include 'Conexao.php';

    function inserirPessoa($nome, $email){
        $conn = getConnection();
        senha = sh1(senha);
        senha = md5(senha);
        $sql = "INSERT INTO pessoa (nome,email) VALUES (?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$email);

        if($stmt->execute()){
            echo "Inserido com Sucesso!";
        }else{
            echo "Erro ao tentar inserir uma pessoa";
        }

        function usurarui ( eial e senha ){
            conexao = getconection
        }

        
    }

  
    -->