<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NotificationModel;


use App\Controllers\Admin\DateTime;


class Notification extends BaseController
{
    public $session;
    public function __construct()
    {
        helper('form');
        $this->session = session();
        $this->NotificationModel = new NotificationModel();
    }
    public function index()
    {
      $NotificationModel = new NotificationModel();
      $data['notifications'] = $NotificationModel->findAll();
       return view('admin/notification', $data);
    }
    public function notifications()
    {
        // if (!session()->has('logged_in')) {
        //     return redirect()->to(base_url() . '/Admin/Login');
        // }

        $NotificationModel = new NotificationModel();
       
        $data['notification'] = $NotificationModel->getDetails();
      
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'description' => 'required',
                'toDate' => 'required',
                'fromDate' => 'required',
            ];
            if ($this->validate($rules)) {

                $data = [
                    'description' => $this->request->getPost('description'),
                    'displayToDate' => $this->request->getPost('toDate'),
                    'displayFromDate' => $this->request->getPost('fromDate'),
                   // 'created_by' => session()->get('logged_in'),
                    'created_at' => date('Y-m-d H:i:s'),   
                ];
                

                $notifications = $NotificationModel->save($data);
                if ($notifications) {
                    $this->session->setFlashdata('success', 'Notification added successfully');
                    return redirect()->to('/Admin/Notification');
                } else {
                    $this->session->setFlashdata('error', 'Could not add notification, please try again');
                    return redirect()->to('/Admin/Notification');
                }
            } else {
                $data['validation'] = $this->validator;
                return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
            }
        }
        return view('admin/notification', $data);
    }

    public function notificationDisable()
    {
        //this function is used to disable shift data
        // if (!session()->has('logged_in')) {
        //     return redirect()->to(base_url() . '/Admin/Login');
        // }
        // echo $this->request->getPost('id');
        $NotificationModel = new NotificationModel();
        if ($this->request->getMethod() == 'post') {
            $id = $this->request->getPost('id');
        

            $tdata = ['status' => 0];
            $userdata = $NotificationModel->update($id, $tdata);


            if ($userdata) {
                $result = 1;
            } else {
                $result = 0;
            }
            echo $result;
        } else {
            $this->session->setFlashdata('error', 'Please select a notification to disable');
            return redirect()->to('/Admin/Notification');
        }
    }
}