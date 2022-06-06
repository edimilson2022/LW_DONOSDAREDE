<?php
namespace controle;
include 'processaAcesso.php';
use processaAcesso as processaAcesso;
$controle = new \processaAcesso\ProcessaAcesso;

if ($_POST['cadastrar']) {
    $produto = $_POST['produto'];
    $perco = $_POST['preco'];
    $senha = $_POST['senha'];
    $tipo_usuario = 2;
    $arr = array('nome' => $nome, 'email' => $email, 'senha' => $senha,
'tipousuario' => $tipo_usuario);
    if (!$controle->cadastraUsuario($arr)) {
        echo 'Aconteceu algum erro';
    } else {
        $usuario = $controle->verificaAcesso($email, $senha);
        if ($usuario[0]['tipousuario'] == 1) {
        header("Location:../page/cadUsuario.php");
    } else if ($usuario[0]['tipoproduto'] == 2) {
        header("Location:../page/cadUsuario.php");
    }
    }  
}
