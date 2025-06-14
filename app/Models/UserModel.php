<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['name', 'email', 'password', 'role'];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
