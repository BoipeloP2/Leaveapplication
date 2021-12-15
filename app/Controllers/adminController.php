<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\adminModel;


class AdminController extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){
      $model = new adminModel();
      $data['tbladmin'] = $model->orderBy('id', 'DESC')->findAll();
      return $this->respond($data);
    }

    // create
    public function create() {
        $model = new adminModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'dateCreated'  => $this->request->getVar('dateCreated'),
         
        ];
        $model->insert($data);
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Admin created successfully'
          ]
      ];
      return $this->respondCreated($response);
    }

    // single user
    public function show($id = null){
        $model = new adminModel();
        $data = $model->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Admin found');
        }
    }

    // update
    public function update($id = null){
        $model = new adminModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'dateCreated'  => $this->request->getVar('dateCreated'),
         
        ];
        $model->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'Admin updated successfully'
          ]
      ];
      return $this->respond($response);
    }

    // delete
    public function delete($id = null){
        $model = new adminModel();
        $data = $model->where('id', $id)->delete($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Admin successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Admin found');
        }
    }

    
   

  

}