<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crane extends Model
{
    use HasFactory;
    protected $table = "cranes";
    protected $fillable = [
        'resource', 'crane_type', 'mob_demob', 'arrival_date', 'ready', 'demob', 'stringID'
    ];

}