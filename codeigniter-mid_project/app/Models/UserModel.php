<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['name','email','password', 'created_at'];

    
}