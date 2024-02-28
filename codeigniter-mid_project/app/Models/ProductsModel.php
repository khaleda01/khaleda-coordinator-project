<?php 
namespace App\Models;
use CodeIgniter\Model;
class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'category','unit','brand','price','date&time'];
}