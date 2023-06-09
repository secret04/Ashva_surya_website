<?php

namespace App\Controllers;
use App\Models\NewsModel;
use App\Models\AdvertisementsModel;


class Home extends BaseController
{
    public function index()
    {
        
        $NewsModel = new NewsModel();
        $AdvertisementsModel = new AdvertisementsModel();
        $data['advertisements'] = $AdvertisementsModel->findAll();

      $data['news'] = $NewsModel->findAll();
        return view('welcome_message',$data);
    }
   
}
