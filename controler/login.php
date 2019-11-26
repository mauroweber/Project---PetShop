
<?php



require '../conexao.php';

if (!empty($_POST) AND (empty($_POST['usuario'] OR empty($_POST['senha'])))) {
    echo "NÃO ENCONTRADO";
    header("Location: ../index.php");
    exit;
} else {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $sql = 'SELECT * FROM db_usuario WHERE db_usuario = :usuario  AND senha = :senha';

    $coon = getConnection();
    $stmt = $coon->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);

    $result = $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($users) <= 0) {
       
        // echo ("<script type='text/javascript  src='https://cdn.jsdelivr.net/npm/promise-polyfill'>
        // Swal.fire({
        //     position: 'top-end',
        //     icon: 'success',
        //     title: 'Your work has been saved',
        //     showConfirmButton: false,
        //     timer: 1500
        //   })
        
        // </script>");

        echo "Login Invalido";
        echo "<script src='https://cdn.jsdelivr.net/npm/promise-polyfill' type='text/javascript'></script>";
        echo "<script language='javascript' type='text/javascript'>
        Swal.fire({position: 'top-end',icon: 'success', title: 'Your work has been saved', showConfirmButton: false, timer: 1500 })
        </script>";
        exit;
    }

  
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['user_id'] = $users[0]["idusuario"];
    $_SESSION['user_name'] = $users[0]["usuario"]; 
 
    header('Location: ../view/home.php');

    $coon = null;
}



?>