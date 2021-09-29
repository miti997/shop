<?php 
    $combine = new Combiner();
    $combine->combineStyle(['backend_navbar']);
    $combine->combineScript(['jquery', 'backend_navbar']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <nav>
        <h3>Navbar</h3>
        <h4><a class="button" onclick="showOptions('users')">Users</a></h4>
        <ul id="users">
            <li><a href = '/backend/users/index'>View Users</a></li>
            <li><a href = '/backend/users/add'>Add users</a></li>
            <li>Access Levels</li>
            <li></li>
        </ul>
        <h4>Products</h4>
    </nav>
