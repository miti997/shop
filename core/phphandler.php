<?php

if(isset($_POST) && isset($_SERVER['REQUEST_URI'])) {
    $request = $_SERVER['REQUEST_URI'];
    $request=explode('/',$request);
    $class = ucfirst($request[1]) . 'Controller';
    $method = $request[2];
    $results = new $class();
    $results = $results->$method();
    echo json_encode($results);
}
