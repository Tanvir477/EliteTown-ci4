<?php

namespace App\Controllers;

class Authentication extends BaseController
{
    // public function construct(){

    // }
    public function index()
    {
        return view('auth/login');
    }

    Public function auth_process()
    {
        echo "here in authentication process <br>";
        //$un= $_POST['uname'];
        $un= $this->request->getpost("uname");
        $pass= $this->request->getpost("upass");
        echo $un.">>".$pass;

        //logic

        //Check login
        //check data
    }



    // public function register()
    // {
    //     return view('auth/register');
    // }

}