<?php namespace App\Models;
use CodeIgniter\Model;
class Booking extends Model{
    protected $table = 'booking_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['','date','time','fname','number_id','lname','email', 'cat_service_id','vendor_id'];
    }


