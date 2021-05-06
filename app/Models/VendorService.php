<?php namespace App\Models;

use CodeIgniter\Model;

class VendorService extends Model{
    protected $table = 'vendor_service_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['vender_id','price','category_id','service_id'];
    }

    function vendorserviceById($id)
	{
	$query=$this->db->query("select * vendor_service_tbl  where id='".$id.”’”);
	return $query->result();
    }





