<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'Name',
        'Made_IN',
        'Condiction',
        'Price',
        'Picture',
        'Warranty',
        'Posted',
        'CateID',
        'ShopID',
    ];

}
