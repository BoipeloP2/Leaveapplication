<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\departmentsModel;


class DepartmentController extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){
      $model = new departmentsModel();
      $data['tbldepartments'] = $model->orderBy('id', 'DESC')->findAll();
      return $this->respond($data);

    }

    // create
    public function create() {
        $model = new departmentsModel();
        $CreationDate = date("Y/m/d"); 
        $data = [
            'DepartmentName' => $this->request->getVar('DepartmentName'),
            'DepartmentShortName'  => $this->request->getVar('DepartmentShortName'),
            'CreationDate'  => date("Y-m-d H:i:s"),
         
        ];
        $model->insert($data);
        return $this->response->redirect(site_url('/Department'));
       
    }

    // single user
    public function show($id = null){
        $model = new departmentsModel();
        $data = $model->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No department found');
        }
    }

    // Sql server fetch
    public function sql($id = null){
        $model = new departmentsModel();
        $data = $model->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No department found');
        }
    }

    public function updateDepartmentbyid ($id = null){
        $model = new departmentsModel();
        $data['data'] = $model->where('id', $id)->first();
        return view('admin/editDepartment', $data);
    }
    // update
    public function updateDepartment($id = null){

    helper(['form', 'url']);


        $model = new departmentsModel();
        $id = $this->request->getVar('id');
        $data = [
            'DepartmentName' => $this->request->getVar('DepartmentName'),
            'DepartmentShortName'  => $this->request->getVar('DepartmentShortName'),
            'CreationDate'  =>  date("Y-m-d H:i:s"),
         
        ];
        $model->update($id, $data);


      return $this->response->redirect(site_url('/Department'));

    }

    // delete
    public function delete($id = null){
        $model = new departmentsModel();
        $data['data'] = $model->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/Department'));

    }

    public function department(){

        $model = new departmentsModel();

        $data['data'] = $model->orderBy('id', 'DESC')->findAll();
        return view("admin/department",$data);
    }

}