<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CraneRecolocation extends Model
{
    use HasFactory;
    protected $table = "crane_recolocation";
    protected $fillable = [
        'movement_from', 'movement_to', 'crane_type', 'distance', 'assemble_option','start_date', 'start_hour', 'end_date', 'end_hour', 'total_hours',
        'hours_contract', 'hours_excess', 'hours_standby', 'hours_not_standby', 'comments'
    ];

}