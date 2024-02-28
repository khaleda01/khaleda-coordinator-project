<?php

namespace App\Controllers;
// use App\Models\PurchasesModel;
// use App\Models\SalesModel;

class Deshbord extends BaseController
{
    public function deshbord()
    {
        $session = session();
        $loggedin = $session->isLoggedIn;
        if($loggedin){
            return view('deshbord');
        }else{
            return redirect()->to('/signin');
        }
        
    }



    
    // public function all_Customers()
    // {
    //     return view('all_Customers');
    // }
    // public function add_Customers()
    // {
    //     return view('add_Customers');
    // }
    // public function all_Products()
    // {
    //     return view('all_Products');
    // }
    // public function add_Product()
    // {
    //     return view('add_Product');
    // }
    // public function login()
    // {
    //     return view('login');
    // }
 
 
}
