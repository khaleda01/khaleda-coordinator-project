<?php 
namespace App\Models;
use CodeIgniter\Model;
class SalesModel extends Model
{
    protected $table = 'sales';
    protected $primaryKey = 'id';
    
    protected $allowedFields = ['p_name','p_category','p_unit','p_price','date&time'];
}