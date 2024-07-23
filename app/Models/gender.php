<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fiillable = ['laki_laki', 'perempuan'];

    public function asrama()
    {
        return $this->hasMany(asrama::class);
    }
    
}
