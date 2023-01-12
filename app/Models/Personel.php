<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;
    protected $table = "personel";
    protected $fillable = [
        'week', 'date', 'n_workers_day', 'n_workers_night'
    ];

}