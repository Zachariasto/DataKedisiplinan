<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id_siswa'];
    protected $table ='siswa';
    public $timestamps = false;

    public function disiplin():HasMany //relasi one to many
    {
        return $this->hasMany(Disiplin::class,'id_siswa'.'id_siswa');
    }
}
