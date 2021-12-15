<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\EmployeesModel;
use App\Models\adminModel;



class EmployeeController extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){

        
        helper(['form']);
        $data = [];
        echo view('admin/newEmployee', $data);
    }

  

    // create
    public function create() {
        $model = new EmployeesModel();
        $data = [
            'FirstName' => $this->request->getVar('FirstName'),
            'LastName'  => $this->request->getVar('LastName'),
            'EmailId'  => $this->request->getVar('EmailId'),
            'Gender'  => $this->request->getVar('Gender'),
            'Dob'  => $this->request->getVar('Dob'),
            'Department'  => $this->request->getVar('Department'),
            'Av_leave'  => $this->request->getVar('Av_leave'),
            'Phonenumber'  => $this->request->getVar('Phonenumber'),
            'status'  => $this->request->getVar('status'),
            'RegDate'  => $this->request->getVar('RegDate'),
            'role'  => $this->request->getVar('role'),
            'location'  => $this->request->getVar('location'),
            'Address'  => $this->request->getVar('Address'),


            
            
        ];
        $model->insert($data);
    //     $response = [
    //       'status'   => 201,
    //       'error'    => null,
    //       'messages' => [
    //           'success' => 'Employee created successfully'
    //       ]
    //   ];
    //   return $this->respondCreated($response);
    }

    // single user
    public function show($id = null){
        $model = new EmployeesModel();
        $data = $model->where('emp_id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No employee found');
        }
    }

    // update
    public function update($id = null){
        $model = new EmployeesModel();
        $id = $this->request->getVar('emp_id');
        $data = [
            'FirstName' => $this->request->getVar('FirstName'),
            'LastName'  => $this->request->getVar('LastName'),
            'EmailId'  => $this->request->getVar('EmailId'),
            'Gender'  => $this->request->getVar('Gender'),
            'Dob'  => $this->request->getVar('Dob'),
            'Department'  => $this->request->getVar('Department'),
            'Av_leave'  => $this->request->getVar('Av_leave'),
            'Phonenumber'  => $this->request->getVar('Phonenumber'),
            'status'  => $this->request->getVar('status'),
            'RegDate'  => $this->request->getVar('RegDate'),
            'role'  => $this->request->getVar('role'),
            'location'  => $this->request->getVar('location'),
        ];
        $model->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'Employee updated successfully'
          ]
      ];
      return $this->respond($response);
    }

    // delete
    public function delete($id = null){
        $model = new EmployeesModel();
        $data = $model->where('emp_id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Employee successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No employee found');
        }
    }

    public function ShowEmployees(){
        return view("admin/Employees");

    }

    public function NewEmployee(){
        return view("admin/newEmployee");

    }

}