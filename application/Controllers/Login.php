<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    protected $helpers = ['form'];

    public function index()
    {
        $this->validate([]);
        return view('login', ['title' => 'Login', 'validation' => $this->validator]);
    }

    public function verify()
    {
        $config = [
            'email' => 'required|valid_email',
            'password' => 'required'
        ];
        if (!$this->validate($config)) {
            return view('login', ['title' => 'Login', 'validation' => $this->validator]);
        }

        $loginEmail = $this->request->getPost('email');
        $loginPassword = $this->request->getPost('password');

        $userMod = new UserModel();
        $userData = $userMod->findOneByEmail($loginEmail);
        if (!empty($userData)) {
            echo password_verify($loginPassword, $userData[0]['password']);
        } else {
            echo 'not found';
        }
    }
}
