<?php

namespace Contatoseguro\TesteBackend\Service;

use Contatoseguro\TesteBackend\Config\DB;

class CompanyService
{
    private \PDO $pdo;
    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function getNameById($id)
    {
        $stm = $this->pdo->prepare("SELECT name FROM company WHERE id = {$id}");
        $stm->execute();
        
        return $stm;
    }

    public function getLog(){
            $sql_logs = "SELECT usuario, tipo_alteracao, data_alteracao FROM logs";
            $result = $db->query($sql_logs);
            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                echo "(" . $row['usuario'] . ", " . $row['tipo_alteracao'] . ", " . date('d/m/Y H:i:s', strtotime($row['data_alteracao'])) . "),<br>";
            }
            
        }
        }
