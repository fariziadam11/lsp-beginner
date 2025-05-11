<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kosentrasi extends Model
{
    protected $table = 'konsentrasi_keahlian';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nama_konsentrasi',
        'keterangan',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'konsentrasi_id', 'id');
    }
    public function tingkatan()
    {
        return $this->hasMany(Tingkatan::class, 'konsentrasi_id', 'id');
    }
}
