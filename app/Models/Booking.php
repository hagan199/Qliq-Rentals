<?php namespace App\Models;
use CodeIgniter\Model;
class Booking extends Model{
    protected $table = 'booking_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fname','lname','email', 'service_id',
                                'vendor_id','number_room','number_chair','number_tables',
                                'number_mattress','number_room','pick_date','event_location','drop_off','event_type',];
    }