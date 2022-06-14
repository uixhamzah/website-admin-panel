<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    use HasFactory;

    protected $table = 'regencies';

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'province_id', 'id');
    }

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'regency_id', 'id');
    }
}
