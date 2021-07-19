<?php namespace App\Models;

use CodeIgniter\Model;

class PaymentConfirm extends Model{
    protected $table = 'payment_confirm_tbl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['payment_status','date', 'time','admin','book_id'];
    }


