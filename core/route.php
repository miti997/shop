<?php
class Route {
    public function submit() {
        if(!isset($_SERVER['REQUEST_URI'])) {
            http_response_code(404);
        } else {
            $uri = $_SERVER['REQUEST_URI'];
            $routes = [
                '/' => 'frontend/home.php',
                '/backend/home' => 'backend/views/users/index.php',
                '/backend/'  => 'backend/views/users/index.php',
                '/backend/jquery.js' => 'backend/js/jquery.js',
                '/backend/users_index.js' => 'backend/js/users_index.js',
            ];
        }
       
        if(!array_key_exists($uri, $routes)) {
            http_response_code(404);
            return include 'core/errors/404error.php';
        } else {
            return include $routes[$uri];
        }
    }
}
?>