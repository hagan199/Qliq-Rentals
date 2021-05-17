<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['user_name','email','user_password','user_created_at','fname','sub_metro','area','lname', 'phone','user_type','image','setting_vendor_id','nation_id'];
    protected function beforeUpdate(array $data){
    $data = $this->passwordHash($data);
    $data['data']['updated_at'] = date('Y-m-d H:i:s');
    return $data;
    }

    protected function passwordHash(array $data){
    if(isset($data['data']['password']))
    $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    return $data;
  }
}
