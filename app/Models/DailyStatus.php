<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyStatus extends Model
{
    use HasFactory;
    protected $table = "handwork_daily_status";
    protected $fillable = [
        'date', 'total_employee', 'departure_time', 'entry_time', 'projectID'
    ];

}