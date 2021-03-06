<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryService extends Model{
          protected $table = 'category_service_tbl';
          protected $primaryKey = 'id';
          protected $allowedFields = ['category_name','service_id', 'name'];
          }

          function get_all_CategoryService()
          {
 //   $db      = \Config\Database::connect();
          $builder = $db->table('categoryService_tbl');
          $builder->select('*');
          $builder->join('service_tbl', 'service_tbl.id = category_service_tbl.id');
          $builder->orderBy('id','ASC');
          return $this->builder()->get()->getResult();
          }


