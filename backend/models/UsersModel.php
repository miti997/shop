<?php

class UsersModel extends Connection
{
    protected function index ()
    {
        $conn = new Connection();
        $conn->connect();
        return "this was a test";
    }
}
