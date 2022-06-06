<?php
//utilização de namespaces
namespace processaAcesso {
include 'mysql.php';
    use Mysql as Mysql;
    class ProcessaAcesso {
        var $db;
        public function __construct() {
            $conexao = new Mysql\mysql(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
            $this->db = $conexao;
        }
        public function verificaAcesso($email, $senha) {
            $select = $this->db->select('usuario', '*',
" where email = '$email' and senha = '$senha'");
            return $select;
        }
        public function cadastraUsuario($dados){
            $insert = $this->db->insert('usuario', $dados);
            return $insert;
        }

        public function pesquisaUsuario(){
            $pesquisa = $this->db->select('usuario', null);
            return $pesquisa;
        }
        public function cadastraProduto($dados){
            $insert = $this->db->insert('produtos', $dados);
            return $insert;
        }
    }
}
?>
