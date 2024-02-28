<?php 
namespace App\Controllers;
use App\Models\BrandsModel;
use CodeIgniter\Controller;
class BrandCrud extends Controller
{
    // show users list
    public function index(){
        $brandsModel = new BrandsModel();
        $data['brands'] = $brandsModel->orderBy('id', 'DESC')->findAll();
        return view('brand_view', $data);
    }
    // add user form
    public function create(){
        return view('add_brands');
    }
 
    // insert data
    public function store() {
        $brandsModel = new BrandsModel();
        $data = [
            'name' => $this->request->getPost('name'),
          
        ];
        $brandsModel->insert($data);
        return $this->response->redirect(base_url('brands-list'));
    }
    // show single user
    public function singleUser($id = null){
        $brandsModel = new BrandsModel();
        $data['user_obj'] = $brandsModel->where('id', $id)->first();
        return view('brand-edit', $data);
    }
    // update user data
    public function update(){
        $brandsModel = new BrandsModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
           
        ];
        $brandsModel->update($id, $data);
        return $this->response->redirect(base_url('/brands-list'));
    }
 
    // delete user
    public function delete($id = null){
        $brandsModel = new BrandsModel();
        $data['user'] = $brandsModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/brands-list'));
    }    
}