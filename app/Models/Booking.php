<?php namespace App\Models;
use CodeIgniter\Model;
class Booking extends Model{
    protected $table = 'booking_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fname','lname','email', 'service_id','vendor_id','number_room','approved_date','approved_status','admin_approved',
                                'number_chair','number_tables','number_mattress','phone','pickup_date','approved_time','price','total_price',
                                'cat_service_id','category_id','event_location','drop_off','status','event_type','payment_status'];
    }