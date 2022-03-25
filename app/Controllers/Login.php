<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\emp;
  
class Login extends Controller
{
    use ResponseTrait;

    public function index()
    {
        helper(['form']);
        echo view('login');
    } 
  
    public function auth()
    {
        $session = session();
        $model = new emp();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('workemail', $email)->first();
        if($data){
            $pass = $data['epassword'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass ==true){
                $ses_data = [
                    'id'       => $data['id'],
                    'firstname'     => $data['firstname'],
                    'workemail'    => $data['workemail'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('admin/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 