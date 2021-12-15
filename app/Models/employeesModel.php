<?php 
namespace App\Models;
use CodeIgniter\Model;

class employeesModel extends Model
{
    protected $table = 'tblemployees';
    protected $primaryKey = 'emp_id';
    protected $allowedFields = ['FirstName', 'LastName','EmailId','Gender','Dob','Department','Address','Av_leave','Phonenumber','status','RegDate','role','location'];

   
}