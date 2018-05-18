<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HumbleBundle extends Model
{
    protected $table = 'humble_bundles';
    
    protected $fillable = ['name', 'created_at', 'updated_at', 'acquired'];
}
