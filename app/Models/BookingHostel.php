<?php namespace App\Models;

use CodeIgniter\Model;

class BookingHostel extends Model{
    protected $table = 'booking_hostel';
    protected $primaryKey = 'id';
    protected $allowedFields = ['hostel_type','date','time','fname','mname','lname','email', 'member','phone'];
    }


