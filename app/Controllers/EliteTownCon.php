<?php

namespace App\Controllers;

use App\Models\EliteTownRegM;
use App\Models\EliteTownLoginM;

class EliteTownCon extends BaseController
{
    public function Home(){
    
        return view('elitetown/index.php');
    }
    public function store(){
    
        return view('elitetown/shop.php');
    }
    public function apropos(){
    
        return view('elitetown/about.php');
    }
    public function get_touch(){
    
        return view('elitetown/contact.php');
    }
    public function signin_signout(){
    
        return view('elitetown/account.php');
    }
    public function bag(){
    
        return view('elitetown/cart.php');
    }
    public function getData(){
        $sql = new GetProductM();
        $result  ['user']=$sql->findAll();

        if(mysqli_num_rows($result) > 0){
            return view('elitetown/shop', $result);
        }

    }

    public function login_check()
    {
        $login = new EliteTownLoginM();

        
        $em= $this->request->getPost('email');
        $upas= $this->request->getPost('upass');

        echo $em.">>".$upas;
        $valuser['user']=$login->find($em);
        echo "<pre>";
        print_r($valuser);

        foreach($valuser as $a)
        {
            $dbemail = $a ['email'];
            $dbpass = $a ['upass'];
            $dbstatus = $a ['status'];

            if(($dbemail == $em) && ($dbpass == $upas) && ($dbstatus == 'unlock')){
                echo "<br> <h1> VALID USER</h1>";
            }
            else
            echo "<br> <h1>INVALID USER</h1>";
        }

    }
    

    public function user_save()
    {
    $userdb = new EliteTownRegM();

    $uname= $this->request->getPost('uname');
    $email= $this->request->getPost('email');
    $upass= $this->request->getPost('upass');
    $data=array(
        'uname' =>$uname,
        'email' =>$email,
        'upass' =>$upass,
    );
    //print_r($data);exit();
    //$userdb->save($data); //pk

    $userdb-> insert($data);

    return redirect()->to (base_url('elitetowncon/user_view'))->with('status','Data inserted Successfully');
    }
    public function user_view(){
    //     $usermod= new EliteTownRegM();
    //     $data['user']=$usermod->findAll();
       // echo "<pre>";
      
    //     //print_r($data);
        return view('elitetown/info');
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