<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryService extends Model{
    protected $table = 'category_service_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['category_name','image','service_id','detail'];
    }





