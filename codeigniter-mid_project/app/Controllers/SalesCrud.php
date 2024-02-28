<?php 
namespace App\Controllers;
use App\Models\SalesModel;
use App\Models\CategorysModel;

use App\Models\UnitsModel;
use CodeIgniter\Controller;
class SalesCrud extends Controller
{
    // show users list
    public function index(){
        $salesModel = new SalesModel();
        $data['sales'] = $salesModel->orderBy('id', 'DESC')->findAll();
        $result = $salesModel->select('sum(p_price) as sumQuantities')->first();
		$data['sum'] = $result['sumQuantities'];

        return view('sale_view', $data);
    }
    // add user form
    public function create(){
       

        $unit  = new UnitsModel();
        $data['unit'] = $unit->findAll();

        $CategorysModel  = new CategorysModel();
        $data['Category'] = $CategorysModel->findAll();


        return view('add_sales',$data);
    }
 
    // insert data
    public function store() {
        $salesModel = new SalesModel();
        $data = [
            'p_name' => $this->request->getPost('p_name'),
            'p_category'  => $this->request->getPost('p_category'),
            'p_unit'  => $this->request->getPost('p_unit'),
        
            'p_price'  => $this->request->getPost('p_price'),
            'date&time'  => $this->request->getPost('date&time'),
          
        ];
        $salesModel->insert($data);
        return $this->response->redirect(base_url('sales-list'));
    }
    // show single user
    public function singleUser($id = null){
        $salesModel = new SalesModel();
        $data['user_obj'] = $salesModel->where('id', $id)->first();
        return view('sale-edit', $data);
    }
    // update user data
    public function update(){
        $salesModel = new SalesModel();
        $id = $this->request->getPost('id');
        $data = [
          
            'p_name' => $this->request->getPost('p_name'),
            'p_category'  => $this->request->getPost('p_category'),
            'p_unit'  => $this->request->getPost('p_unit'),
            'p_price'  => $this->request->getPost('p_price'),
            'date&time'  => $this->request->getPost('date&time'),
           
        ];
        $salesModel->update($id, $data);
        return $this->response->redirect(base_url('/sales-list'));
    }
 
    // delete user
    public function delete($id = null){
        $salesModel = new SalesModel();
        $data['user'] = $salesModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/sales-list'));
    }    
}