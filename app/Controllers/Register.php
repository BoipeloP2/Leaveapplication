<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


use App\Models\adminModel;
  
class Register extends Controller
{
    use ResponseTrait;

    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('admin/newEmployee', $data);
    }
  
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tbladmin.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $model = new adminModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'User_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/loginW');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
          
    }
  
}