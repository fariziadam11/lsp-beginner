<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nama_siswa',
        'nisn',
        'alamat',
        'no_telp',
        'email',
        'tingkatan_id',
        'konsentrasi_id',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'tanggal_lahir' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function konsentrasi()
    {
        return $this->belongsTo(Kosentrasi::class, 'konsentrasi_id', 'id');
    }
    public function tingkatan()
    {
        return $this->belongsTo(Tingkatan::class, 'tingkatan_id', 'id');
    }
}
