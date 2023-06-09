<?php namespace App\Models;
use CodeIgniter\Model;
class AdvertisementsModel extends Model{
    protected $table = 'advertisements';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','title','image','description'];

} 
?>