<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends Controller
{
    protected $helpers = ['form'];

    public function index()
    {
        $this->validate([]);

        return view('register', ['title' => 'Register', 'validation' => $this->validator]);
    }

    public function create()
    {
        $config = [
            'name' => [
                'rules' => 'required'
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'is_unique' => 'The email is already in used!'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[6]|max_length[12]'
            ],
            'confirmPassword' => [
                'rules' => 'required|matches[password]'
            ]
        ];
        if (!$this->validate($config)) {
            return view('register', ['title' => 'Register', 'validation' => $this->validator]);
        }

        $userData = $this->request->getGetPost();
        $userData['password'] = password_hash($userData['password'], PASSWORD_DEFAULT);
        $userMod = new UserModel();
        $userMod->save($userData);

        return redirect('/login');
    }

    public function list()
    {
        $userMod = new UserModel();
        return view('list', ['title' => 'User List', 'users' => $userMod->findAll()]);
    }
}
