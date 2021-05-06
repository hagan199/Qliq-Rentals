<?php namespace App\Models;

use CodeIgniter\Model;

class Service extends Model{
    protected $table = 'service_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['service_name','detail'];
    }


