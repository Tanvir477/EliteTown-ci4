<?php

namespace App\Models;
use CodeIgniter\Model;

class UserRegM extends Model
{
    protected $table = "userinfo";
    protected $primaryKey= "uid";
    protected $allowedFields=[
        'uid',
        'fname',
        'lname',
        'dob',
        'gender'
    ];
}
?>