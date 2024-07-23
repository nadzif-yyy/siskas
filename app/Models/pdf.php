<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdf extends Model
{
    use HasFactory;

    public function asrama()
    {
        return $this->hasMany(asrama::class);
    }
    
}
