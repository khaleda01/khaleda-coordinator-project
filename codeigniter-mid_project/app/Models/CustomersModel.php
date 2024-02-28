<?php 
namespace App\Models;
use CodeIgniter\Model;
class CustomersModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'email','phone','age','address'];
}