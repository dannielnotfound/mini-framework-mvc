<?php 
namespace App;

class Routes{
    private $routes;

    public function __construct()
    {
        $this->initRoutes();
    }

    public function getRoutes(){
        return $this->routes;
    }
    public function setRoutes(array $routes){
        $this->routes = $routes;
    }
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
        $this->setRoutes($routes);
    }

    public function getUrl(){
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); //variavel superglobal do PHP; Array que retorna os detalhes do servidor da aplicação
        //return parse_url('www.google.com/gmail?x10'); // return query string params
    }
}
?>