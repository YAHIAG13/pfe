<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Product
{
    use HasFactory;
    
    protected $table = 'hardwares';

    protected $fillable = [
        'datasheet',
        'category',
    ];
}
