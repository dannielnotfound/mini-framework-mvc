<?php

namespace App\Controllers;


#recursos do mini framework
use ns\Controller\Action;
use ns\Model\Container;

#os models
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action
{

  public function index()
  {

    $produto = Container::getModel('Produto');

    $this->view->dados = $produto->getProdutos();

    $this->render('index', 'layout1');
  }

  public function sobreNos()
  {
    $info = Container::getModel('info');

    $this->view->dados = $info->getInfo(); //return um PDOStatement

    $this->render('sobreNos', 'layout1');
  }

  public function contato()
  {
    


    $this->render('contato', 'layout1');
  }
}
