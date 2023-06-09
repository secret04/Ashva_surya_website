<?php

namespace  App\Models;

use CodeIgniter\Model;
use Exception;

class NotificationModel extends Model
{
    protected $db;
    protected $table = 'notifications';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id',
        'description',
        'displayFromDate',
        'displayToDate',
        'status',
        'created_at',
        'created_by',
    ];
   
    public function getDetails()
    {
        //this function is used to get all the details from furnace where approve=0
        // echo session('logged_firm');
        return $this->select('*')
        ->where('status',1)->get()->getResult();
    }

    public function getSlider() {
        return $this->select('*')
        ->where('status',1)
        ->orderBy('created_at','ASC')
        ->get()->getResult();
    }

    public function getActiveNotification() {
        $today = date('Y-m-d');
        return $this->select('description')
        ->where('status',1)
        ->where('displayFromDate <=',$today)
        ->where('displayToDate >=',$today)
        ->orderBy('created_at','ASC')
        ->get()->getResultArray();
    }

}