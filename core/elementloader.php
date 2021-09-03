<?php
if (strpos($_SERVER['REQUEST_URI'],'backend') !== false) {
    include 'backend/elements/navbar.php';
}