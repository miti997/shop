<?php
class Route {
    public function submit() {
        $start = (float)microtime();
        if(!isset($_SERVER['REQUEST_URI'])) {
            http_response_code(404);
        } else {
            $uri = $_SERVER['REQUEST_URI'];
            $routes = [
                '/' => 'frontend/home.php',
                '/admin/home' => 'backend/views/dashboard.php',
                '/admin'  => 'backend/views/dashboard.php',
                '/admin/users' => 'backend/views/users/index.php',
                '/admin/users/index' => 'backend/views/users/index.php',
                '/admin/users/add' => 'backend/views/users/add.php',
                '/users/add' => 'phphandler.php',
                '/admin/users/view/.*\S' => 'backend/views/users/view.php',
            ];
        }
        foreach ($routes as $key=>$value) {
            $result = $this->checkRoute($key, $uri);
            if($result === 1) {
                $end = (float)microtime()-$start;
                echo '<br>'.$end.'<br>';
                return include $routes[$key];
            }
        }
        if ($result === 0) {
            http_response_code(404);
            return include 'core/errors/404error.php';
        }       
    }
    public function checkRoute($regex = null, $uri=null) {
        return preg_match("@^(?:$regex)$@", $uri, $match);
    }
}
?>