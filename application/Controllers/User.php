<?php namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
	public function index()
	{
		echo 'Welcome to user controller';
	}

	public function new()
	{
		return view('user/new');
	}

	public function edit()
	{
		return view('user/edit');
	}
}
