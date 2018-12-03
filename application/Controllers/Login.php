<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
    public function index()
    {
        return view('user/index');
    }

    public function getData()
    {
        var_dump($this->request->getGetPost());
    }
}
