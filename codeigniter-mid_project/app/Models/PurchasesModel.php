<?php 
namespace App\Models;
use CodeIgniter\Model;
class PurchasesModel extends Model
{
    protected $table = 'purchases';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['name', 'category','unit','brand','price','date&time'];
}