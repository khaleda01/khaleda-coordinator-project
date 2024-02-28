<?php 
namespace App\Controllers;
use App\Models\PurchasesModel;
use App\Models\CategorysModel;
use App\Models\BrandsModel;
use App\Models\UnitsModel;
use CodeIgniter\Controller;
class PurchasesCrud extends Controller
{
    // show users list
    public function index(){
        $purchasesModel = new PurchasesModel();
        $data['purchases'] = $purchasesModel->orderBy('id', 'DESC')->findAll();
        $result = $purchasesModel->select('sum(price) as sumQuantities')->first();
		$data['sum'] = $result['sumQuantities'];

        return view('purchases_view', $data);
    }
    // add user form
    public function create(){
        $brand  = new BrandsModel();
        $data['band'] = $brand->findAll();

        $unit  = new UnitsModel();
        $data['unit'] = $unit->findAll();

        $CategorysModel  = new CategorysModel();
        $data['Category'] = $CategorysModel->findAll();

        return view('add_purchases',$data);
    }
 
    // insert data
    public function store() {
        $purchasesModel = new PurchasesModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'category'  => $this->request->getPost('category'),
            'unit'  => $this->request->getPost('unit'),
            'brand'  => $this->request->getPost('brand'),
            // 'picture'  => $this->request->getPost('picture'),
            'price'  => $this->request->getPost('price'),
            'date&time'  => $this->request->getPost('date&time'),
        ];
        $purchasesModel->insert($data);
        return $this->response->redirect(base_url('purchases-list'));
    }
    // show single user
    public function singleUser($id = null){

        $brand  = new BrandsModel();
        $data['band'] = $brand->findAll();

        $unit  = new UnitsModel();
        $data['unit'] = $unit->findAll();

        $CategorysModel  = new CategorysModel();
        $data['Category'] = $CategorysModel->findAll();
        
        $purchasesModel = new PurchasesModel();
        $data['user_obj'] = $purchasesModel->where('id', $id)->first();
        return view('purchases-edit', $data);
    }
    // update user data
    public function update(){
        $purchasesModel = new PurchasesModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'category'  => $this->request->getPost('category'),
            'unit'  => $this->request->getPost('unit'),
            'brand'  => $this->request->getPost('brand'),
            // 'picture'  => $this->request->getPost('picture'),
            'price'  => $this->request->getPost('price'),
            'date&time'  => $this->request->getPost('date&time'),
        ];
        $purchasesModel->update($id, $data);
        return $this->response->redirect(base_url('/purchases-list'));
    }
 
    // delete user
    public function delete($id = null){
        $purchasesModel = new PurchasesModel();
        $data['user'] = $purchasesModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/purchases-list'));
    }    
}