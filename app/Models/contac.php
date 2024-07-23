<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contac extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'contacs';
    protected $fiillable = ['name', 'email', 'phone', 'message'];
}
