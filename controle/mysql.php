<?php
//utilização de namespaces
namespace Mysql {
    //declaração de variáres globais
    define('DB_SERVER', 'localhost');
    define('DB_NAME', 'projeto');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');

    class mysql {
        var $db, $conn;
        public function __construct($server, $database, $username, $password) {
            $this->conn = mysqli_connect($server, $username, $password);
            $this->db = mysqli_select_db($this->conn, $database);
        }
        /**
         * Função de seleção dos registros da tabela
         * @param string $tabela tabela onde será buscado os registros
         * @param string $colunas string contendo as colunas separadas
         */
        public function select($tabela, $colunas = "*", $where = "1=1") {
            $sql = "SELECT $colunas FROM $tabela $where";
            $result = $this->executar($sql);
            $linha = null;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $linha[] = $row;
            }
            return $linha;
        }


        /**
         * Função para inserir dados na tabela
         * @param array $dados Array contendo os dados a serem inseridos
         * @param string $tabela tabela que será inserido os dados
         * @return boolean verdadeiro ou falso
         */
        public function insert($tabela, $dados) {
            foreach ($dados as $key => $value) {
                $keys[] = $key;
                $insertvalues[] = '\'' . $value . '\'';
            }
            $keys = implode(',', $keys);
            $insertvalues = implode(',', $insertvalues);
            $sql = "INSERT INTO $tabela ($keys) VALUES ($insertvalues)";
            return $this->executar($sql);
        }

        private function executar($sql) {
            $return_result = mysqli_query( $this->conn,$sql);
            if ($return_result) {
                return $return_result;
            } else {
                $this->sql_error($sql);
            }
        }

        private function sql_error($sql) {
            echo mysqli_error($this->conn) . '<br>';
            die('error: ' . $sql);
        }
    }
}
?>