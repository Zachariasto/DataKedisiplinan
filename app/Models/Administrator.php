<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; //relasi tabel
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Administrator extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $guarded = ['id_admin'];
    protected $table ='administrator';
    public $timestamps = false;

    protected $fillable = [
        'user',
        'password',
        'admin_type',
    ];

    protected $hidden =[
        'password',
        'remember_token',
    ];

    protected $casts =[
        'password' => 'hashed',
    ];

    protected $enum =[
        'admin_type' => ['admin', 'guest'],
    ];

    //relasi
    public function disiplin():HasMany //relasi one to many
    {
        return $this->hasMany(Disiplin::class,'id_admin'.'id_admin');
    }
}
