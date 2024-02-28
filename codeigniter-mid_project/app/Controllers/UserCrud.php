<?php 
namespace App\Controllers;
use App\Models\CustomersModel;
use CodeIgniter\Controller;
class UserCrud extends Controller
{
    // show users list
    public function index(){
        $customersModel = new CustomersModel();
        $data['customers'] = $customersModel->orderBy('id', 'DESC')->findAll();
        return view('user_view', $data);
    }
    // add user form
    public function create(){
        return view('add_user');
    }
 
    // insert data
    public function store() {
        $customersModel = new CustomersModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'phone'  => $this->request->getPost('phone'),
            'age'  => $this->request->getPost('age'),
            'address'  => $this->request->getPost('address'),
        ];
        $customersModel->insert($data);
        return $this->response->redirect(base_url('users-list'));
    }
    // show single user
    public function singleUser($id = null){
        $customersModel = new CustomersModel();
        $data['user_obj'] = $customersModel->where('id', $id)->first();
        return view('edit-view', $data);
    }
    // update user data
    public function update(){
        $customersModel = new CustomersModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'phone'  => $this->request->getPost('phone'),
            'age'  => $this->request->getPost('age'),
            'address'  => $this->request->getPost('address'),
        ];
        $customersModel->update($id, $data);
        return $this->response->redirect(base_url('/users-list'));
    }
 
    // delete user
    public function delete($id = null){
        $customersModel = new CustomersModel();
        $data['user'] = $customersModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/users-list'));
    }    
}