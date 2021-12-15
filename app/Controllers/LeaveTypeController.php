<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\leaveTypesModel;


class LeaveTypeController extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){
      $model = new leaveTypesModel();
      $data['tblleavetype'] = $model->orderBy('id', 'DESC')->findAll();

      return $this->respond($data);
    }

    // create
    public function create() {

        
        $model = new leaveTypesModel();
        $data = [
            'LeaveType' => $this->request->getVar('LeaveType'),
            'Description'  => $this->request->getVar('Description'),
            'date_from'  => date("Y-m-d H:i:s"),
            'date_to'  => date("Y-m-d H:i:s"),
            'CreationDate'  => date("Y-m-d H:i:s"),
         
        ];
        $model->insert($data);
        return $this->response->redirect(site_url('/leavetype'));
      //return $this->respondCreated($response);
    }

    // single user
    public function show($id = null){
        $model = new leaveTypesModel();
        $data = $model->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No LeaveType found');
        }
    }

    // update
    public function update($id = null){
        $model = new leaveTypesModel();
        $id = $this->request->getVar('id');
        $data = [
            'LeaveType' => $this->request->getVar('LeaveType'),
            'Description'  => $this->request->getVar('Description'),
            'date_from'  => date("Y-m-d H:i:s"),
            'date_to'  => date("Y-m-d H:i:s"),
            'Creation'  => date("Y-m-d H:i:s"),
         
        ];
        $model->update($id, $data);
        return $this->response->redirect(site_url('/leavetype'));

    }

    // delete
    public function delete($id = null){
        $model = new leaveTypesModel();
           //$data = $model->where('id', $id)->delete($id);
        $data['data'] = $model->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/leavetype'));
        // if($data){
        //     $model->delete($id);
            //return $this->response->redirect(site_url('/leavetype'));

        // }else{
        //     return $this->failNotFound('No LeaveType found');
        // }
    }

    public function showLeavetype(){

        $model = new leaveTypesModel();

        $data['data'] = $model->orderBy('id', 'DESC')->findAll();
        return view("admin/LeaveType",$data);


    }

    

}