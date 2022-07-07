<?php 
namespace App;
use ns\Init\Bootstrap;
class Routes extends Bootstrap{
   
    
    protected function initRoutes(){
        $routes = [];
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['contato'] = array(
            'route' => '/contato',
            'controller' => 'indexController',
            'action' => 'contato'
        );
        $routes['sobre_nos'] = array(
            'route' => '/sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        ); 
        $this->setRoutes($routes);
    }
}

?>