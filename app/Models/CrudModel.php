<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
class CrudModel extends Model{

    protected $db;

    public function __construct(ConnectionInterface &$db) 
    { 
        $this->db =& $db; 
    }

    
    public function getcategory($service_id) 
    {
        $builder = $this->db->table('category_service_tbl');
        $builder = $builder->where('service_id',$service_id);
        $category = $builder->get()->getResultArray();
        $output = '<option value="">Select Category </option>';
        foreach($category as $rowCL){ 
            $output .='<option value="'.$rowCL['id'].'" >'.$rowCL['category_name']. ' </option>'; 
        } 
        return $output;
    }

    public function getsubcategory($category){
        $builder = $this->db->table('sub_category_service_tbl');
        $builder = $builder->where('category_service_id',$category);
        $category = $builder->get()->getResultArray();
        $output = '<option value="">Select Category </option>';
        foreach($category as $rowCL){ 
            $output .='<option value="'.$rowCL['id'].'" >'.$rowCL['sub_cat_name']. ' </option>'; 
        } 
        return $output;
    }
    
            } 
        ?>