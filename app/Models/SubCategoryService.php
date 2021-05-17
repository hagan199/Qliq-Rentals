<?php namespace App\Models;

use CodeIgniter\Model;

class SubCategoryService extends Model{
      protected $table = 'sub_category_service_tbl';
      protected $primaryKey = 'id';
      protected $allowedFields = ['catergory_service_id','sub_cat_name'];
      }


