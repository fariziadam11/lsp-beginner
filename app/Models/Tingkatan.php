<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Tingkatan extends Model
{
    protected $table = 'tingkatan';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nama_tingkatan',
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
        return $this->hasMany(Siswa::class, 'tingkatan_id', 'id');
    }
    public function konsentrasi()
    {
        return $this->hasMany(Kosentrasi::class, 'tingkatan_id', 'id');
    }
}
