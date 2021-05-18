<?php namespace App\Models;

use CodeIgniter\Model;

class SubCategoryService extends Model{
      protected $table = 'sub_category_service_tbl';
      protected $primaryKey = 'id';
      protected $allowedFields = ['category_service_id','sub_cat_name'];
      }


