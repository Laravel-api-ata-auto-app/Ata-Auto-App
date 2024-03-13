<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dtc extends Model
{
    use HasFactory;
    protected $table='dtcs';
    protected $fillable=[
        'DTC_Code',
        'Khdtc',
        'Endtc',
    ];
}
