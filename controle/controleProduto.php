<?php
namespace controle;
include 'processaAcesso.php';
use processaAcesso as processaAcesso;
$controle = new \processaAcesso\ProcessaAcesso;

if ($_POST['cadastrar']) {
    $produto = $_POST['nome'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    
    $arr = array('nome' => $produto, 'preco' => $preco, 'quantidade' => $quantidade,);
    if (!$controle->cadastraProduto($arr)) {
        echo 'Aconteceu algum erro';
    } else {
        header("Location:../page/cadProduto.php");
    }  
}