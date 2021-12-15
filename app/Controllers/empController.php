<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\emp;


class empController extends ResourceController
{

  use ResponseTrait;

  // all users
  public function index()
  {
    $model = new emp();
    $data['emptbl'] = $model->orderBy('id', 'DESC')->findAll();

    return $this->respond($data);
  }

  public function create()
  {
    $model = new emp();
    $data = [
      'empNo' => $this->request->getVar('empNo'),
      'title' => $this->request->getVar('title'),
      'firstname'  => $this->request->getVar('firstname'),
      'nickname'  => $this->request->getVar('nickname'),
      'surname'  => $this->request->getVar('surname'),
      'gender'  => $this->request->getVar('gender'),
      'ethicsgroup'  => $this->request->getVar('ethicsgroup'),
      'maritalstatus'  => $this->request->getVar('maritalstatus'),
      'disability'  => $this->request->getVar('disability'),
      'citizenship'  => $this->request->getVar('citizenship'),
      'idno'  => $this->request->getVar('idno'),
      'passport'  => $this->request->getVar('passport'),
      'sarstaxno'  => $this->request->getVar('sarstaxno'),
      'homecellno'  => $this->request->getVar('homecellno'),
      'hometellno'  => $this->request->getVar('hometellno'),
      'workcellno'  => $this->request->getVar('workcellno'),
      'worktellno'  => $this->request->getVar('worktellno'),
      'streetname'  => $this->request->getVar('streetname'),
      'city'  => $this->request->getVar('city'),
      'province'  => $this->request->getVar('province'),
      'postalcode'  => $this->request->getVar('postalcode'),
      'country'  => $this->request->getVar('country'),
      'pstreetname'  => $this->request->getVar('pstreetname'),
      'pcity'  => $this->request->getVar('pcity'),
      'pprovince'  => $this->request->getVar('pprovince'),
      'ppostalcode'  => $this->request->getVar('ppostalcode'),
      'pcountry'  => $this->request->getVar('pcountry'),
      'personalemail'  => $this->request->getVar('personalemail'),
      'workemail'  => $this->request->getVar('workemail'),




    ];
    $model->insert($data);
    return $this->response->redirect(site_url('/Employee'));
  }

  public function delete($id = null){
    $model = new emp();
       //$data = $model->where('id', $id)->delete($id);
    $data['data'] = $model->where('id', $id)->delete($id);
    return $this->response->redirect(site_url('/Employee'));
    // if($data){
    //     $model->delete($id);
        //return $this->response->redirect(site_url('/leavetype'));

    // }else{
    //     return $this->failNotFound('No LeaveType found');
    // }
}

  public function showbyid($id = null)
  {
    $model = new emp();
    $data = $model->where('id', $id)->first();
    if ($data) {
      return $this->respond($data);
    } else {
      return $this->failNotFound('No employee found');
    }
  }

  public function updatebyid($id = null)
  {
    $model = new emp();
    $data['data'] = $model->where('id', $id)->first();
   return view('admin/editemployees',$data);
  }

  public function update($id = null){
    $model = new emp();
    $id = $this->request->getVar('id');
    $data = [
      'empNo' => $this->request->getVar('empNo'),
      'title' => $this->request->getVar('title'),
      'firstname'  => $this->request->getVar('firstname'),
      'nickname'  => $this->request->getVar('nickname'),
      'surname'  => $this->request->getVar('surname'),
      'gender'  => $this->request->getVar('gender'),
      'ethicsgroup'  => $this->request->getVar('ethicsgroup'),
      'maritalstatus'  => $this->request->getVar('maritalstatus'),
      'disability'  => $this->request->getVar('disability'),
      'citizenship'  => $this->request->getVar('citizenship'),
      'idno'  => $this->request->getVar('idno'),
      'passport'  => $this->request->getVar('passport'),
      'sarstaxno'  => $this->request->getVar('sarstaxno'),
      'homecellno'  => $this->request->getVar('homecellno'),
      'hometellno'  => $this->request->getVar('hometellno'),
      'workcellno'  => $this->request->getVar('workcellno'),
      'worktellno'  => $this->request->getVar('worktellno'),
      'streetname'  => $this->request->getVar('streetname'),
      'city'  => $this->request->getVar('city'),
      'province'  => $this->request->getVar('province'),
      'postalcode'  => $this->request->getVar('postalcode'),
      'country'  => $this->request->getVar('country'),
      'pstreetname'  => $this->request->getVar('pstreetname'),
      'pcity'  => $this->request->getVar('pcity'),
      'pprovince'  => $this->request->getVar('pprovince'),
      'ppostalcode'  => $this->request->getVar('ppostalcode'),
      'pcountry'  => $this->request->getVar('pcountry'),
      'personalemail'  => $this->request->getVar('personalemail'),
      'workemail'  => $this->request->getVar('workemail'),
      //'disability'  => $this->request->getVar('disability'),





    ];
    $model->update($id,$data);
    return $this->response->redirect(site_url('/Employee'));

}


  public function showEmp()
  {

    $model = new emp();
    $data['data'] = $model->orderBy('id', 'DESC')->findAll();
    return view("admin/employees",$data);
  }

}
