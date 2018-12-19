<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserApi extends Controller
{
    public function getUser()
    {
      $userMod = new UserModel();
      $allUsers = $userMod->findAll();
      echo view('ajax/list', ['allUsers' => $allUsers]);
      exit();
    }
}
