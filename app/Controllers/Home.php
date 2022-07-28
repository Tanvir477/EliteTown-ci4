<?php

namespace App\Controllers;

class Home extends BaseController
{   
    //CONSTRACTION
    
    //properties and methods
    public function index()
    {
        return view('welcome_message');
    }
    public function check()
    {
        //$db = \Config\Database::connect();
        //$query=$db->query('select name,email, gender form elitetown');
        //$result =$query->getresult();

        //print_r($result);
     return view('login');

    }
    public function seu()
    {
        return view('nsu');
    }
    public function Login1()
    {
        return view('login_successful');
    }
}


