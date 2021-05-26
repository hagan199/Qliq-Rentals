<?php namespace App\Models;

use CodeIgniter\Model;

class VendorService extends Model{
    protected $table = 'vendor_service_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['vendor_id','price','category_id','service_id','sub_category_id', 'type', 'name'];
    }

    function vendorserviceById($id)
	{
	$query=$this->db->query("select * vendor_service_tbl  where id='".$id.”’”);
	return $query->result();
    }





