<?php

class UsersController extends UsersModel
{
    public function index()
    {
        $users = new UsersModel();
        $results = $users->index();
        return $results;
    }
    public function add()
    {
        $users = new UsersModel();
        $results = $users->add();
        return $results;
    }
}

