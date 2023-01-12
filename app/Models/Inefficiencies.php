<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inefficiencies extends Model
{
    use HasFactory;
    protected $table = "inefficiencies";
    protected $fillable = [
        'date', 'project', 'wtg', 'hours','responsible','validated','cause','subcause','justification','n_workers','shift_option','partial_time'
    ];

}