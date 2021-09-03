<?php 
    $combine = new Combiner();
    $combine->combineStyle(['backend_navbar']);
    $combine->combineScript(['jquery', 'backend_navbar']);
?>
<nav>
    <h3>Navbar</h3>
    <h4><a href="#" class="button" onclick="showOptions('users')">Users</a></h4>
    <ul id="users">
        <li><a href = '/backend/users/index'>View Users</a></li>
        <li><a href = '/backend/users/add'>Add users</a></li>
        <li>Access Levels</li>
        <li></li>
    </ul>
    <h4>Products</h4>
</nav>