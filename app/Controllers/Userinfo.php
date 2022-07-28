<?php

namespace App\Controllers;

use App\Models\UserRegM;

class Userinfo extends BaseController
{
    public function user_view(){
        $usermod= new UserRegM();
        $data['user']=$usermod->findAll();
       // echo "<pre>";
        //print_r($data);
        return view('auth/information', $data);
    }

    public function index(){
        $user= new UserRegM();
        $data['userinfo'] =$user->findAll();
        echo "<pre>";
        print_r($data); exit();
        return view ('userview', $data);
    }
    public function user_reg()
    {
        return view('auth/registation');
    }

    public function user_save()
    {
        $userdb = new UserRegM();

        $uid= $this->request->getPost('uid');
        $fn= $this->request->getPost('fname');
        $ln= $this->request->getPost('lname');
        $dob= $this->request->getPost('dob');
        $sex= $this->request->getPost('gender');
        $data=array(
            'uid' =>$uid,
            'fname' =>$fn,
            'lname' =>$ln,
            'dob' => $dob,
            'gender' => $sex
        );
        //print_r($data);exit();
        //$userdb->save($data); //pk

        $userdb-> insert($data);

        return redirect()->to (base_url('userinfo/user_view'))->with('status','Data inserted Successfully');

    }
    public function user_edit($id)
    {
        $userobj =new UserRegM();

        $data['user']=$userobj->find($id);
        //echo "<pre>"; print_r($data); exit();
        
        return view('auth/useredit'); 
    }

    public function user_update($id)
    {
        $userobj =new UserRegM();

        $data['user'] = $userobj->find($id);
        $fn = $this->request->getpost('fname');
        $ln = $this->getpost('lname');

        $data=array(
            'fname' => $fn,
            'lname' => $ln,
        );
        $userobj -> update($id,$data);

        return redirect()->to(base_url('auth/userview'))->with('status','Data update successfully');
    }
    
   
}