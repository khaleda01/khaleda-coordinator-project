<?php 
namespace App\Controllers;
use App\Models\CategorysModel;
use CodeIgniter\Controller;
class CategoryCrud extends Controller
{
    // show users list
    public function index(){
        $categorysModel = new CategorysModel();
        $data['categorys'] = $categorysModel->orderBy('id', 'DESC')->findAll();
        return view('category_view', $data);
    }
    // add user form
    public function create(){
        return view('add_categorys');
    }
 
    // insert data
    public function store() {
        $categorysModel = new CategorysModel();
        $data = [
            'name' => $this->request->getPost('name'),
          
        ];
        $categorysModel->insert($data);
        return $this->response->redirect(base_url('categorys-list'));
    }
    // show single user
    public function singleUser($id = null){
        $categorysModel = new CategorysModel();
        $data['user_obj'] = $categorysModel->where('id', $id)->first();
        return view('category-edit', $data);
    }
    // update user data
    public function update(){
        $categorysModel = new CategorysModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
           
        ];
        $categorysModel->update($id, $data);
        return $this->response->redirect(base_url('/categorys-list'));
    }
 
    // delete user
    public function delete($id = null){
        $categorysModel = new CategorysModel();
        $data['user'] = $categorysModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/categorys-list'));
    }    
}