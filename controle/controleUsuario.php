<?php
//utilização de namespaces
namespace controle;
include 'processaAcesso.php';
use processaAcesso as processaAcesso;
$controle = new \processaAcesso\ProcessaAcesso;
if ($_POST['entrar']) {
    $tipo = 2;
    // $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $usuario = $controle->verificaAcesso($email, $senha);

    var_dump($email);

    var_dump($senha);

    var_dump($usuario);

    // //redirecionando para pagina conforme o tipo do usuário
    // if ($usuario[2]['tipousuario'] == 1) {
    //     header("Location:page/areaAdmin.php");
    // } else if ($usuario[2]['tipousuario'] == 2) {
    //     header("Location:page/areaAdmin.php");
    // }
} else if ($_POST['cadastrar']) {
    $nome = $_POST['nome'];
    $email = md5($_POST['email']);
    $senha = $_POST['senha'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $arr = array('nome' => $nome, 'email' => $email, 'senha' => $senha,
'tipousuario' => $tipo_usuario);
    if (!$controle->cadastraUsuario($arr)) {
        echo 'Aconteceu algum erro';
    } else {
        $tipo_acesso = $controle->verificaAcesso($login, $senha);
        if ($tipo_acesso[0]['id_tipo_acesso'] == 1) {
            header("Location:paginas/pagina1.html");
        } else if ($tipo_acesso[0]['id_tipo_acesso'] == 2) {
            header("Location:paginas/pagina2.html");
        }
    }
}
?>