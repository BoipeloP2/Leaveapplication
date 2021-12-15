<?php 
namespace App\Models;
use CodeIgniter\Model;

class leavesModel extends Model
{
    protected $table = 'tblleaves';
    protected $primaryKey = 'id';
    protected $allowedFields = ['LeaveType', 'ToDate','FromDate','Description','PostingDate','AdminRemark','registra_remarks','AdminRemarksDate','Status','admon_status','IsRead','empid','num_days'];
}