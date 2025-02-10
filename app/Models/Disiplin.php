<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disiplin extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table ='disiplin';
    public $timestamps = false;

    protected $casts =[
        'tanggal' => 'timestamp',
    ];

    public function administrator():BelongsTo //relasi one to many
    {
        return $this->belongsTo(administrator::class,'id_admin'.'id_admin');
    }
    public function siswa():BelongsTo
    {
        return $this->belongsTo(siswa::class,'id_siswa'.'id_siswa');
    }
    public function sanksi():BelongsTo
    {
        return $this->belongsTo(sanksi::class,'id_sanksi'.'id_sanksi');
    }
}
