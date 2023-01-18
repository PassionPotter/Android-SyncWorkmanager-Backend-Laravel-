<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceActivation extends Model
{
    use HasFactory;
    protected $table = "resource_activation";
    protected $fillable = [
        'description', 'model_name', 'company', 'arrival_date', 'ready_to_work', 'comments', 'projectID'
    ];

}