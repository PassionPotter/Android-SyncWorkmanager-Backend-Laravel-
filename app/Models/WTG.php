<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WTG extends Model
{
    use HasFactory;
    protected $table = "wtgs";
    protected $fillable = [
        'wtg_name', 'wtg_type', 'assembly_secuence', 'special_nacelle_beacon', 'special_tower_beacon', 'stringID'
    ];

}