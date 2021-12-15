<?php 

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\WorkflowModel;
use App\Models\adminModel;



class Workflow extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){

        
        helper(['form']);
        $data = [];
        echo view('admin/workflow', $data);
    }

    public function workflow(){
        return view("admin/workflow");

    }

  

}