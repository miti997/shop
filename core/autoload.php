<?php 

spl_autoload_register('autoLoad');

function autoLoad($className) 
{
    if (strpos($className, 'Controller') == true) {
        include 'backend/controllers/' . ucfirst($className) . '.php';
    }
    if (strpos($className, 'Model') == true) {
        include 'backend/models/' . $className . '.php';
    }
    if ($className == 'Connection') {
        include 'connection.php';
    }
    if ($className == 'Combiner') {
        include 'combiner.php';
    }
    if ($className == 'Route') {
        include 'route.php';
    }
    if ($className == 'ElementLoader') {
        include 'elementloader.php';
    }
}