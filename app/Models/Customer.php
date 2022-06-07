<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable=['name','tel','is_favourite'];

    protected $casts=[
        'is_favourite'=>'boolean'
    ];
    
}
