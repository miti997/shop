<?php

class UsersModel extends Connection
{
    protected function index ()
    {
        $conn = new Connection();
        $conn->connect();
        return "this was a test";
    }

    protected function add ()
    {
        $conn = new Connection();
        $conn->connect();
        return "this was a test for users add";
    }
}
