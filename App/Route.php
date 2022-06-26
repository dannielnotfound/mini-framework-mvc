<?php 
namespace App;
class Route{
    public function initRoutes(){
        $routes = [];
        $routes['home'] = array(
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );
        $routes['sobre_nos'] = array(
            'route' => 'sobre_nos',
            'controller' => 'indexController',
            'action' => 'sobreNos'
        ); 
    }

    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //variavel superglobal do PHP; Array que retorna os detalhes do servidor da aplicação
        //return parse_url('www.google.com/gmail?x10'); // return query string params
    }
}
?>