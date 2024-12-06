<?php

class Router
{
    public $currentRoute;

    public function __construct()
    {
        $this->currentRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function getResource()
    {
        if (isset(explode("/", $this->currentRoute)[2])) {
            $resourceID = (int)explode("/", $this->currentRoute)[2];
            return $resourceID ? $resourceID : '';
        }
    }

    public function get($route, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $resourcesId = $this->getResource();
            $route = str_replace('{id}', $resourcesId, $route);
            if ($route == $this->currentRoute) {
                $callback($resourcesId);
                exit();
            }
        }
    }

    public function post($route, $callback): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($route == $this->currentRoute) {
                $callback();
                exit();
            }
        }
    }

    public function put($route, $callback)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['_method'] == 'PUT') {
                $resourceId = $this->getResource();
                $route = str_replace('{id}', $resourceId, $route);
                if ($route == $this->currentRoute) {
                    $callback($resourceId);
                    exit();
                }
            }
        }
    }

}