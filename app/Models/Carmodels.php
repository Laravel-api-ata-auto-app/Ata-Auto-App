<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmodels extends Model
{
    use HasFactory;
    protected $table='carmodels';
    protected $fillable=[
        'Name',
        'Year',
        'Brand',
        'use',
    ];
}
