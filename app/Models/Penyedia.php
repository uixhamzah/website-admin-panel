<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penyedia extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'penyedia';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [

    ];

    public function driver()
    {
        return $this->hasMany(Driver::class, 'id_penyedia', 'id');
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'id_kabupaten', 'id');
    }
}
