<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintainDocs extends Model
{
    use HasFactory;
    protected $table='maintain_docs';
    protected $fillable=[
        'Docs_Path',
        'ModelID',
    ];
}
