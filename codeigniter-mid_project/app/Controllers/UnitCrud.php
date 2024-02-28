<?php 
namespace App\Controllers;
use App\Models\UnitsModel;
use CodeIgniter\Controller;
class UnitCrud extends Controller
{
    // show users list
    public function index(){
        $unitsModel = new UnitsModel();
        $data['units'] = $unitsModel->orderBy('id', 'DESC')->findAll();
        return view('unit_view', $data);
    }
    // add user form
    public function create(){
        return view('add_units');
    }
 
    // insert data
    public function store() {
        $unitsModel = new UnitsModel();
        $data = [
            'name' => $this->request->getPost('name'),
          
        ];
        $unitsModel->insert($data);
        return $this->response->redirect(base_url('units-list'));
    }
    // show single user
    public function singleUser($id = null){
        $unitsModel = new UnitsModel();
        $data['user_obj'] = $unitsModel->where('id', $id)->first();
        return view('unit-edit', $data);
    }
    // update user data
    public function update(){
        $unitsModel = new UnitsModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
           
        ];
        $unitsModel->update($id, $data);
        return $this->response->redirect(base_url('/units-list'));
    }
 
    // delete user
    public function delete($id = null){
        $unitsModel = new UnitsModel();
        $data['user'] = $unitsModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/units-list'));
    }    
}