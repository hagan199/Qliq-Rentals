<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['name', 'email'];
}