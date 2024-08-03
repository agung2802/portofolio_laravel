<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';
    protected $primaryKey = 'contact_id';
    
    protected $fillable = [
         'contact_type', 'contact_value', 'id_user'
    ];
}
