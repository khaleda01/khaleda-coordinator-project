<?php

namespace App\Models;

use CodeIgniter\Model;

class CategorysModel extends Model
{
    
    protected $table            = 'categorys';
    protected $primaryKey       = 'id';
    // protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $protectFields    = true;
    protected $allowedFields    = ['name'];

    
}