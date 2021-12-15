<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\sqlModel;
  
class sqlController extends Controller
{

    use ResponseTrait;

    public function index(){
        $model = new sqlModel();
        $data['sms_master_single'] = $model->orderBy('sms_id', 'DESC')->findAll();
        return $this->respond($data);
  
      }
    public function show($id = null){
        $model = new sqlModel();
        $data = $model->where('sms_id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No department found');
        }
    }
    public function user_get(){
        $r = $this->user_model->read();
        $this->respond($r); 
    }

    Public function insertSql(){
        
    }

} 