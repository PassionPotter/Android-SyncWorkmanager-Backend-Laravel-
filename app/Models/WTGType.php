<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WTGType extends Model
{
    use HasFactory;

    protected $table = "wtg_types";
    
    protected $fillable = [
        'name'
    ];

}