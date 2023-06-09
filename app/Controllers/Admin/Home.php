<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class Home extends BaseController
{
    public $loginModel;
    public $session;
    public function __construct()
    {
        helper('form');
        $this->loginModel = new LoginModel();
        $this->session =session();
    }
    public function index()
    {
        $data['userdt'] = $this->loginModel->findAll();
        if ($this->request->getMethod() == 'post') {
            $rules = [

                'email' => 'required|valid_email',
                'password' => 'required'
            ];


            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');
                $userdata = $this->loginModel->verifyEmail($email);
                if ($userdata) {
                           
                       return redirect()->to(base_url() . 'Admin/Dashboard');
                } 
            } else {
                    $this->session->setFlashdata('error', 'Email or password is incorrect');
                    return redirect()->to(current_url());
                }
        //  } else {
        //         $data['validation'] = $this->validator;
        //     }
        }
        return view('admin/dashboard',$data);
    }

    public function setPassword()
    {
        $pass='admin123';
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        echo $hash;
        exit;
    }

    public function logout()
    {
        session()->remove('logged_in');
        session()->remove('logged_in');
        session()->destroy();
        return redirect()->to(base_url() . 'Admin');
    }
    
   
    
}
