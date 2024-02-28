<?php 
namespace App\Controllers;
use App\Models\ProductsModel;
use App\Models\CategorysModel;
use App\Models\BrandsModel;
use App\Models\UnitsModel;
use CodeIgniter\Controller;
class ProductCrud extends Controller
{
    // show users list
    public function index(){
        $productsModel = new ProductsModel();
        $data['products'] = $productsModel->orderBy('id', 'DESC')->findAll();
        return view('product_view', $data);
    }
    // add user form
    public function create(){
        $brand  = new BrandsModel();
        $data['band'] = $brand->findAll();

        $unit  = new UnitsModel();
        $data['unit'] = $unit->findAll();

        $CategorysModel  = new CategorysModel();
        $data['Category'] = $CategorysModel->findAll();

        return view('add_product',$data);
    }
 
    // insert data
    public function store() {
        $productsModel = new ProductsModel();
        $data = [
            // 'name' => $this->request->getPost('name'),
            // 'category'  => $this->request->getPost('category'),
            // 'unit'  => $this->request->getPost('unit'),
            // // 'picture'  => $this->request->getPost('picture'),
            // 'price'  => $this->request->getPost('price'),

            'name' => $this->request->getPost('name'),
            'category'  => $this->request->getPost('category'),
            'unit'  => $this->request->getPost('unit'),
            'brand'  => $this->request->getPost('brand'),
            // 'picture'  => $this->request->getPost('picture'),
            'price'  => $this->request->getPost('price'),
            'date&time'  => $this->request->getPost('date&time'),


        ];
        $productsModel->insert($data);
        return $this->response->redirect(base_url('products-list'));
    }
    // show single user
    public function singleUser($id = null){
        $productsModel = new ProductsModel();
        $data['user_obj'] = $productsModel->where('id', $id)->first();
        return view('product-edit', $data);
    }
    // update user data
    public function update(){
        $productsModel = new ProductsModel();
        $id = $this->request->getPost('id');
        $data = [
            // 'name' => $this->request->getPost('name'),
            // 'category'  => $this->request->getPost('category'),
            // 'unit'  => $this->request->getPost('unit'),
            // // 'picture'  => $this->request->getPost('picture'),
            // 'price'  => $this->request->getPost('price'),

            'name' => $this->request->getPost('name'),
            'category'  => $this->request->getPost('category'),
            'unit'  => $this->request->getPost('unit'),
            'brand'  => $this->request->getPost('brand'),
            // 'picture'  => $this->request->getPost('picture'),
            'price'  => $this->request->getPost('price'),
            'date&time'  => $this->request->getPost('date&time'),

        ];
        $productsModel->update($id, $data);
        return $this->response->redirect(base_url('/products-list'));
    }
 
    // delete user
    public function delete($id = null){
        $productsModel = new ProductsModel();
        $data['user'] = $productsModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/products-list'));
    }    
}