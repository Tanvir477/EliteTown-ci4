<?php

namespace App\Models;
use CodeIgniter\Model;

class GetProductM extends Model
{
    protected $table = "elitetownpdb";
    protected $primaryKey= "id";
    protected $allowedFields=[
        'id',
        'product_name',
        'product_price',
        'product_image',
        
    ];
}
?>