<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\adminModel;
  
class loginW extends Controller
{
    use ResponseTrait;

    public function index()
    {
        helper(['form']);
        echo view('admin/loginW');
    } 
  
    public function auth()
    {
        $session = session();
        $model = new adminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['User_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('admin/dashboard');
                $session->setFlashdata('msg', 'Welcome');

            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/loginW');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/loginW');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/loginW');
    }
} 