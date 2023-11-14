<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class godinez extends Model
{
    use HasFactory;
    protected $table = 'godinez';
    protected $fillable = [
        'name','age','address'
    ];
}
