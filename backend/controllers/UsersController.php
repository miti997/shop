<?php

class UsersController extends UsersModel
{
    public function index()
    {
        $users = new UsersModel();
        $results = $users->index();
        
        return $results;
    }
}

