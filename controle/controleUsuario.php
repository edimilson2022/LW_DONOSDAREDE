<?php
//utilização de namespaces
namespace controle;
include 'processaAcesso.php';
use processaAcesso as processaAcesso;
$controle = new \processaAcesso\ProcessaAcesso;
if ($_POST['entrar']) {
    $tipo = 2;
    // $nome = $_POST['nome'];
    $email = ($_POST['email']);
    var_dump($email);//verifica
    $senha = $_POST['senha'];
    var_dump($senha);//verifica
    $usuario = $controle->verificaAcesso($email, $senha);
    //verificar o resultado de usuario
    var_dump($usuario);
    //redirecionando para pagina conforme o tipo do usuário
    if ($usuario[0]['tipousuario'] == 1) {
        header("Location:../page/areaAdmin.php");
    } else if ($usuario[0]['tipousuario'] == 2) {
        header("Location:../page/areaCliente.php");
    }
}else if ($_POST['cadastrar']) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo_usuario = 2;
    $arr = array('nome' => $nome, 'email' => $email, 'senha' => $senha,
'tipousuario' => $tipo_usuario);
    if (!$controle->cadastraUsuario($arr)) {
        echo 'Aconteceu algum erro';
    } else {
        $usuario = $controle->verificaAcesso($email, $senha);
        if ($usuario[0]['tipousuario'] == 1) {
        header("Location:../page/areaAdmin.php");
    } else if ($usuario[0]['tipousuario'] == 2) {
        header("Location:../page/areaCliente.php");
    }
    }  
}
function pesquisar() : array{
    $consulta = $controle->pesquisaUsuario();
    return $consulta;
}
// else if($_POST['pesquisar']){
    

//     foreach($consulta as $key => $value){ ?>
//         <td><?php echo $record['nome_']; ?></td>
//         <td><?php echo $record['email']; ?></td>
//         <td><?php echo $record['senha']; ?></td>
//         <td><?php while($recordCurso = mysqli_fetch_array($resultCurso))
//                         if($recordCurso['tipousuario'] == $record['usuario_id']){
//                             echo $recordCurso['tipousuario'].", ";
//                         }
//                    }
//                 }
    
// }
    
    
                //   </td>

//   else if ($_POST['delete ']);
//     $nome = $_POST['nome'];
//     $email = $_POST['email'];
//     $senha = $_POST['senha'];

// // sql to delete a record
// $sql = "DELETE FROM MyGuests WHERE id=3";

// if (mysqli_query($conn, $sql)) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . mysqli_error($conn);
// }

// mysqli_close($conn);

// ?>
