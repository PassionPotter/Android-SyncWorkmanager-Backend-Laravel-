<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OTS1 extends Model
{
    use HasFactory;

    protected $table = "ots1_table";
    
    protected $fillable = [
        'phaseID', 'code', 'description', 'main_lead_time','tn_lead_time', 'auxiliary_lead_time', 'roadmap_lead_time','n_technician', 'stringID'
    ];

}