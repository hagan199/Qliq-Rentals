<?php namespace App\Models;

use CodeIgniter\Model;

class SettingVendor extends Model{
    protected $table = 'setting_vendor';
    protected $primaryKey = 'id';
    protected $allowedFields = ['company_name','address','phone','email','area','gps','sub_metro','street_name','area','business_activity'];
    }


