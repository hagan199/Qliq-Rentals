<?php namespace App\Models;

use CodeIgniter\Model;

class BookingCanopy extends Model{
    protected $table = 'booking_canopy';
    protected $primaryKey = 'id';
    protected $allowedFields = ['hall_type','date','time','fname','mname','lname','email', 'member','member'];
    }


