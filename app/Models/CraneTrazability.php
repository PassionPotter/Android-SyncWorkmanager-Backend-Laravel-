<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CraneTrazability extends Model
{
    use HasFactory;
    protected $table = "crane_trazability";
    protected $fillable = [
        'wtg', 'component_type', 'serial_number', 'photo', 'comments', 'projectID'
    ];

}