<?php

class Categorys
{
    public function __construct()
    {
        $user = $_SESSION['user'] ?? [];
        if (!$user || $user['role'] != 'admin') {
            return header("Location: " . ROOT_URL);
        }
    }

    public function
}