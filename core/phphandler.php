<?php
include 'autoload.php';
if(isset($_POST)) {
    $class = ucfirst($_POST['class'].'Controller');
    $method = $_POST['method'];
    if (isset($_POST['parameter'])) {
        $parameters = $_POST['parameters'];
    }
    $class = new $class();
    $result = $class->$method();
    echo json_encode($result);
}
