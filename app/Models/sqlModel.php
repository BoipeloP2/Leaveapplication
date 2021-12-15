<?php 
namespace App\Models;
use CodeIgniter\Model;

class sqlModel extends Model
{
    // protected $database = 'CoTSms_db';
    protected $table = 'sms_master_single';
    protected $primaryKey = 'sms_id';
    protected $allowedFields = ['Deptno', 'cellno','Msg','Priority', 'date', 'dateinserted'];

        // public function read(){
    
        //     $query = $this->db->query("select * from `tbl_user`");
        //     return $query->result_array();
        // }
}