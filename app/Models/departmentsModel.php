<?php 
namespace App\Models;
use CodeIgniter\Model;

class departmentsModel extends Model
{
    protected $table = 'tbldepartments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['DepartmentName', 'DepartmentShortName','CreationDate'];

    
}