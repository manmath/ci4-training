<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['name', 'email', 'password'];

    /**
     * @param string $email
     *
     * @return array
     */
    public function findOneByEmail($email)
    {
        return $this->builder()->where('email', $email)
            ->limit(1)
            ->get()->getResultArray();

        // SELECT * FROM users WHERE email = $email LIMIT 1;
    }
}
