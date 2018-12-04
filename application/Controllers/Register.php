<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        return view('register', ['title' => 'Register']);
    }

    public function create()
    {
        $this->request->getGetPost();
        return redirect('/login');
    }
}
