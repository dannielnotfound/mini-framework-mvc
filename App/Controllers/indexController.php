<?php
namespace App\Controllers;
use ns\Controller\Action;
class IndexController extends Action{


    public function index(){
        $this->view->dados = array('Sofa', 'Cadeira', 'Cama');
        $this->render('index', 'layout1');
    }
    public function sobreNos(){
        $this->view->dados = array('Sofa', 'Cadeira', 'Cama');
        $this->render('sobreNos', 'layout1');
    }
    public function contato(){
        $this->view->dados = array('Sofa', 'Cadeira', 'Cama');
        $this->render('contato', 'layout1');
    }

   
}

?>