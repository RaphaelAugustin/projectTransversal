<?php
/**
 * Created by PhpStorm.
 * User: Taf
 * Date: 29/04/2015
 * Time: 22:13
 */

namespace Taf\Router;

use Symfony\Component\HttpFoundation\Request;

class Router
{

    protected $routes;

    public function __construct(array $routes)
    {
        $defaultRoute = array(
            "home" => array(
                "controller" => "Taf\\Controllers\\PageControllers",
                "action" => "getHome"
            )
        );

        $this->routes = array_merge($defaultRoute, $routes);

    }

    public function getControllerAction(Request $request)
    {

        $routeName = $request->get("p");


        if ($routeName && isset($this->routes[$routeName])) {
            return $this->routes[$routeName];
        }

        return $this->routes['home'];
    }


}