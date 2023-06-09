<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\AdvertisementsModel;
class Advertisements extends BaseController
{
   public function __construct()
   {
       helper('form');
       $this->AdvertisementsModel = new AdvertisementsModel();
       
   }
    public function index()
    {
      $AdvertisementsModel = new AdvertisementsModel();
      $data['advertisements'] = $AdvertisementsModel->findAll();
       return view('admin/advertisements', $data);
    }
    public function create()
    {
       return view('admin/createads');
    }
   public function store()
   {
      if ($this->request->getMethod() == 'post') {    
         $rules = [
             'title' => 'required',
             'description' => 'required',
         //     'image' => [
         //       'label' => 'image file should be of type .jpg, png, or pdf',
         //       'rules' => 'mime_in[doc,image/jpg,image/jpeg,image/png,application/pdf]'
         //   ],    
         ];
         if ($this->validate($rules)) {
          
             $data = [
                 'title' => $this->request->getPost('title'),
                 'description' => $this->request->getPost('description'),
                 //'created_at' => date('Y-m-d H:i:s'),
             ];
             $file = $this->request->getFile('image');
             if ($file->isValid() && !$file->hasMoved()) {
                 $imageName = $file->getRandomName();
                 $file->move('uploads/', $imageName);
                 $data['image'] = $imageName;
             }

             $product = $this->AdvertisementsModel->save($data);

             if ($product) {
               return redirect()->to('Admin/Advertisements')->with('status', 'Advertisements data and image saved');
             }
               } else {
                  $data['validation'] = $this->validator;
                  return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
               }
            
         
     }

     return view('admin/createads');
   }
//    public function edit($id)
//    {
//       $advertisements = new AdvertisementsModel();
//       $data['advertisement'] = $advertisements->find($id);
//       return view('admin/editads', $data);
//    }
//    public function update($id)
//    {
//     $advertisements = new AdvertisementsModel();
//       $prod_item = $advertisements->find($id);
//       $old_img_name = $prod_item['image'];

//       $file = $this->request->getFile('image');
//       if($file->isValid() && !$file->hasMoved())
//       {
//          if(file_exists("uploads/".$old_img_name))
//          {
//             unlink("uploads/".$old_img_name);
//          }
//          $imageName = $file->getRandomName();
//          $file->move('uploads/', $imageName);
//       }
//       else{
//          $imageName =$old_img_name['image'];
//       }
//       $data = [
//          'name' => $this->request->getPost('name'),
//          'description' => $this->request->getPost('description'),
//          'image' =>$imageName,
//      ];
//      $products->update($id,$data);
//      return redirect()->to('Admin/Weddirectory')->with('status', 'Product data and image saved');
//    }
//    public function delete($id)
//    {
//       $product = new ProductsModel();
//       $data = $product->find($id);
//       $imagefile =$data['image'];
//       if(file_exists("uploads/".$imagefile))
//       {
//          unlink("uploads/".$imagefile);
//       }
//       $product->delete($id);
//       return redirect()->back()->with('status', 'Product data and image deleted');
//    }

   
}
