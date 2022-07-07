<?php
namespace App\Models;

use App\Connection;
use \PDO;


class Produto extends Connection{
    protected $db;

    public function __construct(PDO $db)
    { 
        $this->db = $db;
    }

    public function getProdutos(){
        $query = 'select * from tb_produtos';
        return $this->db->query($query)->fetchAll();
    }

     

}
?>
