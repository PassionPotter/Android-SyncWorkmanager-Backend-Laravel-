<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CraneTask extends Model
{
    use HasFactory;
    protected $table = "crane_tasks";
    protected $fillable = [
        'projectID', 'WTGID', 'status', 'crane_type', 'serial_number', 'shift_option','comments', 'taskID'
    ];

}