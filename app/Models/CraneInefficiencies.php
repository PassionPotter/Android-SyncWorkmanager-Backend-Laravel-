<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CraneInefficiencies extends Model
{
    use HasFactory;
    protected $table = "crane_inefficiencies";
    protected $fillable = [
        'date', 'project', 'wtg', 'hours','responsible','validated','cause','subcause','justification','crane_type','shift_option','partial_time', 'taskID'
    ];

}