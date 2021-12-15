<?php 
namespace App\Models;
use CodeIgniter\Model;

class leaveTypesModel extends Model
{
    protected $table = 'tblleavetype';
    protected $primaryKey = 'id';
    protected $allowedFields = ['LeaveType','Description','date_from','date_to','CreationDate'];
}