<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Sanksi extends Model
{
    use HasFactory;
    protected $guarded = ['id_sanksi'];
    protected $table ='sanksi';
    public $timestamps = false;
    public function disiplin():HasMany //relasi one to many
    {
        return $this->hasMany(Disiplin::class,'id_sanksi'.'id_sanksi');
    }
}
