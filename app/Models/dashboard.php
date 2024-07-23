<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'homes';
    protected $fiilable = ['nama_id', 'asrama'];

    public function asrama()
    {
        return $this->belongsTo(asrama::class);
    }
}
