<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
class Dashboard extends BaseController
{ 
    public function index()
    {
        if(!session()->has('logged_in'))
        {
            return redirect()->to(base_url() . 'Admin');
        }
        return view('admin/dashboard');
    }
    public function logout(){
        session()->remove('logged_in');
        session()->destroy();
        return redirect()->to(base_url() . 'Admin');
    }    
    
}
   


