<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\leavesModel;


class LeaveController extends ResourceController
{
    use ResponseTrait;

    public function LeaveApplication(){
        return view("Leave/LeaveApplication");
    }
    public function Leaves(){
        return view("Leave/Leaves");
    }
    // all users
    public function index(){
      $model = new leavesModel();
      $data['tbleaves'] = $model->orderBy('id', 'DESC')->findAll();
      $this->load->view('Leaves',$data);
      return $this->respond($data);
    }

    // create
    public function create() {
        $model = new leavesModel();
        $data = [
            'LeaveType' => $this->request->getVar('LeaveType'),
            'ToDate'  => $this->request->getVar('ToDate'),
            'FromDate'  => $this->request->getVar('FromDate'),
            'Description'  => $this->request->getVar('Description'),
            'PostingDate'  => $this->request->getVar('PostingDate'),
            'AdminRemark'  => $this->request->getVar('AdminRemark'),
            'registra_remarks'  => $this->request->getVar('registra_remarks'),
            'AdminRemarksDate'  => $this->request->getVar('AdminRemarksDate'),
            'status'  => $this->request->getVar('status'),
            'admon_status'  => $this->request->getVar('admon_status'),
            'IsRead'  => $this->request->getVar('IsRead'),
            'empid'  => $this->request->getVar('empid'),
            'num_days'  => $this->request->getVar('num_days'),


            
            
        ];
        $model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'leave created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }

    // single user
    public function showbyid($id = null){
        $model = new leavesModel();
        $data = $model->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No leave/s found');
        }
    }

    // update
    public function update($id = null){
        $model = new leavesModel();
        $id = $this->request->getVar('id');
        $data = [
            'LeaveType' => $this->request->getVar('LeaveType'),
            'ToDate'  => $this->request->getVar('ToDate'),
            'FromDate'  => $this->request->getVar('FromDate'),
            'Description'  => $this->request->getVar('Description'),
            'PostingDate'  => $this->request->getVar('PostingDate'),
            'AdminRemark'  => $this->request->getVar('AdminRemark'),
            'registra_remarks'  => $this->request->getVar('registra_remarks'),
            'AdminRemarksDate'  => $this->request->getVar('AdminRemarksDate'),
            'status'  => $this->request->getVar('status'),
            'admon_status'  => $this->request->getVar('admon_status'),
            'IsRead'  => $this->request->getVar('IsRead'),
            'empid'  => $this->request->getVar('empid'),
            'num_days'  => $this->request->getVar('num_days'),

        ];
        $model->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'leave updated successfully'
          ]
      ];
      return $this->respond($response);
    }

    // delete
    public function delete($id = null){
        $model = new leavesModel();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'leave successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No leave found');
        }
    }

    

}