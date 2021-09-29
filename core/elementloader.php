<?php
class ElementLoader
{
    public function loadElement () {
        if (strpos($_SERVER['REQUEST_URI'],'admin') !== false) {
            include_once 'backend/elements/navbar.php';
        }
    }
}