<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = "tasks";
    protected $fillable = [
        'projectID', 'WTGID', 'status', 'number_workers', 'serial_number', 'shift_option','comments'
    ];

}