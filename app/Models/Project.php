<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $primaryKey = 'project_id';
    
    protected $fillable = [
         'project_name', 'project_desc', 'job_desc', 'technology', 'id_user'
    ];
}
