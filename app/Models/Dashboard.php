<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $table = 'user';
    
    protected $fillable = [
         'full_name', 'self_objective', 'address', 'photo'
    ];
}
