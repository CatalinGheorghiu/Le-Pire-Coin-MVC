<?php
class Users extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
    }

    public function login()
    {
        $this->view('users/login');
    }

    public function register()
    {
        $this->view('users/register');
    }
}
