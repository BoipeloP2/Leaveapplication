<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {

        $session = session();
        echo view('admin/dashboard');
        //$this->load->view('admin/dashboard');  
       // echo "Welcome back, ".$session->get('name');
    }
}