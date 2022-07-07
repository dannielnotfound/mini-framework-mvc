<?php
namespace App\Models;

use App\Connection;
use \PDO;


class Info extends Connection{
    protected $db;

    public function __construct(PDO $db)
    { 
        $this->db = $db;
    }

    public function getInfo(){
        $query = 'select titulo, descricao from tb_info';
        return $this->db->query($query)->fetchAll();
    }

     

}
?>
