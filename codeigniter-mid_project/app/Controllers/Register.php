<?php

namespace App\Controllers;
use \App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        helper(['form']);
        $session = session();
        $error = $session->error;
        if($error){
            $data = $error;
        }else{
            $data = [];
        }
  {

  }
       
        echo view('signup', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/signin');
        }else{
            $data['validation'] = $this->validator;
            // echo view('signup', $data);
            // $this->session->set_flashdata('error',$data);
            // $_SESSION['error'] = $data;
            $session = session();
            $session->set('error',$data);
            $session->markAsFlashdata('error');
            return redirect()->back();
        }
          
    }
    
}
