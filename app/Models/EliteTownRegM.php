<?php

namespace App\Models;
use CodeIgniter\Model;

class EliteTownRegM extends Model
{
    protected $table = "elitetowmUinfo";
    protected $primaryKey= "email";
    protected $allowedFields=[
        'email',
        'uname',
        'upass',
        
    ];
}
?>