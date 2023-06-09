<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class LoginModel extends Model
{
    protected $db;
    protected $useTimestamps = true;
    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id',  'email', 'password', 'status'];
    public function verifyEmail($email)
    {
        $result= $this->select('admin.*')->where('email', $email)->get();
        if($result->getNumRows() == 1) {
            return $result->getRowArray();
        } else {
            return False;
        }
    }

    public function getPasswordById($id)
    {
        return $this->asArray()->where('id',$id)->select('admin.password')->get()->getRow();
    }

    public function updatePassword($id,$pwd)
    {
        echo $this->where('email', $id)->update('password',$pwd);
    }
    

    
}
