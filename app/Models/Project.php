<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $fillable = [
        'project_code','windfarm_name','country','customer','wtg_power','crane_company','assembly_subcontractor',
        'n_wtgs','wtg_type','blade_length','blade_manufacture','tower_height','n_tower_section','pre_assembly_section','n_wtg_special_nacelle_beacon','n_wtg_special_tower_beacon',
        "stringID"
    ];
}