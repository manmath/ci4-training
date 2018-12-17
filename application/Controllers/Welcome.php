<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Welcome extends Controller
{
    public function index()
    {
        return view('default');
    }
}
