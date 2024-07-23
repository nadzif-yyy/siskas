<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\homeController;
use App\Http\Controllers\AsramaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class asrama extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'asramas';
    protected $fiillable = ['asrama', 'nama', 'sekolah', 'gender', 'jenjang_sklh', 'kelas', 'status', 'kriteria'];
    
    public function dashboard(){
        return $this->hasMany(homeController::class);
    }

    public function pdf(){
        return $this->hasMany(AsramaController::class);
    }
}
