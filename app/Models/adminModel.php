<?php 
namespace App\Models;
use CodeIgniter\Model;

class adminModel extends Model
{
    protected $table = 'tbladmin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'User_password', 'dateCreated'];
}