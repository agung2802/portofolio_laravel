<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $table = 'skill';
    protected $primaryKey = 'skill_id';
    
    protected $fillable = [
         'skill_name', 'skill_category', 'id_user'
    ];
}
