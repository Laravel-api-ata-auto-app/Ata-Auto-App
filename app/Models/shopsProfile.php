<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopsProfile extends Model
{
    use HasFactory;
    protected $table='shops_profile';
    protected $fillable=[
        'UserID',
        'Name',
        'Contact_Name',
        'Contact_Number',
        'Address',
        'Picture',

    ];
}
