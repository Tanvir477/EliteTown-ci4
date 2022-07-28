<?php

namespace App\Models;
use CodeIgniter\Model;

class EliteTownLoginM extends Model
{
    protected $table = "elitetowmUinfo";
    protected $primaryKey= "email";
    protected $allowedFields=[
        'email',
        'upass',
        
    ];
}
?>