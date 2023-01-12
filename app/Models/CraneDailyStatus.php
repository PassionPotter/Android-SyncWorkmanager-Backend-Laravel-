<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CraneDailyStatus extends Model
{
    use HasFactory;
    protected $table = "crane_daily_status";
    protected $fillable = [
        'date', 'cranes', 'departure_time', 'entry_time'
    ];

}